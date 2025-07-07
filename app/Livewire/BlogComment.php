<?php

namespace App\Livewire;

use App\Models\Blog;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class BlogComment extends Component
{
    use WithPagination;
    public Blog $blog;

    #[Rule('required|min:3|max:100')]
    public string $comment;

    /**
     * @throws ValidationException
     */
    public function postComment(): void
    {
        $this->validateOnly('comment');
        $this->blog->comments()->create([
            'comment' => $this->comment,
            'user_id' => auth()->id(),
        ]);

        $this->reset('comment');
    }

    #[Computed()]
    public function comments(): ?\Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return $this?->blog?->comments()->with('user')->latest()->paginate(5);
    }
    public function render()
    {
        return view('livewire.blog-comment');
    }
}
