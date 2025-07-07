<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'career_id',
        'user_id',
        'is_accepted',
        'name',
        'email',
        'cv',
        'motivational_letter',
        'country',
        'city',
        'phone_number',
        'birth_date',
    ];

    public function career(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Career::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function downloadCV(): \Symfony\Component\HttpFoundation\StreamedResponse
    {
        return Storage::disk('public')->download('applicants/cvs/' . $this->cv);
    }

    public static function countUserApplications(): int
    {
        return self::where('user_id', auth()->id())->count();
    }

}
