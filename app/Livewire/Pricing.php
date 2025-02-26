<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Plan;

class Pricing extends Component
{
    public $plan;

    public function render()
    {
        $this->plan = Plan::all();
        return view(
            'livewire.pricing',
            [
                'plans' => $this->plan
            ]
        )->layout('layouts.app-welcome');
    }
}
