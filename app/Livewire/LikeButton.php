<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class LikeButton extends Component
{
    #[Reactive()]
    public Blog $blog;

    public function toggleLike(): ?\Illuminate\Contracts\Auth\Authenticatable
    {
        if (auth()->guest())
        {
            return $this->redirect(route('login'), true);
        }
        $user = auth()->user();
        if ($user->hasLiked($this->blog))
        {
            $user->likes()->detach($this->blog);
            return $user;
        }
        $user->likes()->attach($this->blog);
        return $user;
    }


    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.like-button');
    }
}
