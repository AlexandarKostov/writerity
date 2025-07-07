<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class BlogList extends Component
{
    use WithPagination;

    #[Url()]
    public string $sort = 'desc';

    #[Url()]
    public string $search = '';

    #[Url()]
    public string $article = '';

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->resetPage();
    }

    #[Computed()]
    public function blogs()
    {
        return Blog::published()
            ->with('author', 'articles')
            ->when($this->activeArticle(), function ($query) {
                $query->withArticle($this->article);
            })
            ->search($this->search)
            ->orderBy('published_at', $this->sort)
            ->paginate(3);
    }

    #[Computed()]
    public function activeArticle()
    {
        if ($this->article === '') {
            return null;
        }

        return Article::where('slug', $this->article)->first();
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.blog-list');
    }
}
