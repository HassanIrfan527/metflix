<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class AnimePage extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $perPage = 30;

    public function loadMore()
    {
        $this->perPage += 30;
    }

    public function render()
    {
        $animations = Movie::inRandomOrder()->select(['title', 'year', 'imdbRating', 'poster', 'director', 'duration'])->where('is_anime', true)->paginate($this->perPage);
        return view(
            'livewire.anime-page',
            ['animations' => $animations]
        );
    }
}
