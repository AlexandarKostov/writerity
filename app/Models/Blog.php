<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'image',
        'body',
        'published_at',
        'featured',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'blog_like')->withTimestamps();
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function scopePublished($query): void
    {
        $query->where('published_at', '<=', Carbon::now());
    }


    public function scopeWithArticle($query, string $article): void
    {
        $query->whereHas('articles', function ($query) use ($article) {
            $query->where('slug', $article);
        });
    }

    public function scopeSearch($query, string $search = ''): void
    {
        $query->where('title', 'like', "%{$search}%");
    }

    public function getReadTime(): float
    {
        $count = round(str_word_count($this->body) / 250 );
        return ($count < 1 ) ? 1 : $count;
    }
    public function getExcerpt(): string
    {
        return Str::limit(strip_tags($this->body), 100);
    }

    public function getThumbnail()
    {
        $isUrl = str_contains($this->image, 'http');
        return ($isUrl) ? $this->image : Storage::disk('public')->url($this->image);
    }
}
