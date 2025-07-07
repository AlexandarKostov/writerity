<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'profile_photo',
        'country',
        'city',
        'phone_number',
        'birth_date',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function role(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
    public function likes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Blog::class, 'blog_like')->withTimestamps();
    }

    public function comments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function careers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Career::class);
    }

    public function applications(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Applicant::class);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->isAdmin();
    }
    public function isAdmin(): bool
    {
        return $this->role && $this->role->name === 'administrator';
    }

    public function isUser(): bool
    {
        return $this->role && $this->role->name === 'user';
    }

    public function hasLiked(Blog $blog): bool
    {
        return $this->likes()->where('blog_id', $blog->id)->exists();
    }

    public static function registeredUsersInPast72Hours()
    {
        return User::where('created_at', '>=', Carbon::now()->subHours(72))->whereHas('role', function($query) {
            $query->where('name', 'user');
        })
            ->get();
    }

    public static function registeredAdminsInPast72Hours()
    {
        return User::where('created_at', '>=', Carbon::now()->subHours(72))->whereHas('role', function($query) {
            $query->where('name', 'administrator');
        })
            ->get();
    }
}
