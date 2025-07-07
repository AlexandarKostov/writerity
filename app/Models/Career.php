<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'header',
        'title',
        'description',
        'location',
        'requirement_one',
        'requirement_two',
        'preferred_one',
        'working_condition_one',
        'working_condition_two',
        'working_condition_three',
        'benefit_one',
        'benefit_two',
        'benefit_three',
        'image',
        'is_valid',
    ];

    protected $hidden = [

    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function applicants(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Applicant::class);
    }

    public function getThumbnail()
    {
        $isUrl = str_contains($this->image, 'http');
        return ($isUrl) ? $this->image : Storage::disk('public')->url($this->image);
    }

    public function getExcerpt(): string
    {
        return Str::limit(strip_tags($this->description), 200);
    }

    public static function getByHeader($header)
    {
        return self::where('header', $header)
            ->where('is_valid', 1)
            ->get();
    }
}


