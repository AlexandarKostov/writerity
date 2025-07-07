<?php

namespace App\Livewire;

use Livewire\Component;

class Search extends Component
{
    public string $search = '';

    public function updateSearch(): void
    {
        $this->dispatch('search', search : $this->search);
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.search');
    }
}
