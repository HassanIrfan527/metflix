<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class MovieSection extends Component
{

    use WithPagination, WithoutUrlPagination;
    public $perPage = 30;

    public function loadMore(){
        $this->perPage += 30;
        }
    public function render()
    {
        $movies = Movie::select(['title','year','imdbRating','poster'])->paginate($this->perPage);
        return view(
            'livewire.movie-section',
            ['movies' => $movies]
        );
    }
}
