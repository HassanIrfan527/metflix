<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Series extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $perPage = 30;

    public function loadMore()
    {
        $this->perPage += 30;
    }
    public function render()
    {
        $series = Movie::where('type', 'series')
            ->inRandomOrder()
            ->select(['title', 'year', 'imdbRating', 'poster', 'director', 'duration'])
            ->simplePaginate($this->perPage);
        return view(
            'livewire.series',
            [
                'series' => $series,
            ]
        );
    }
}
