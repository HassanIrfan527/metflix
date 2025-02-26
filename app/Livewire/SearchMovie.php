<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class SearchMovie extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $query = '';

    public function updatedQuery()
    {
        $this->resetPage(); // Reset pagination on every search update
    }

    public function render()
    {
        $movies = collect(); // Empty collection initially

        if (!empty($this->query)) {
            $movies = Movie::where('title', 'like', "%{$this->query}%")->paginate(10);
        }

        return view('livewire.search-movie', [
            'movies' => $movies,
        ])->layout('layouts.app');
    }
}
