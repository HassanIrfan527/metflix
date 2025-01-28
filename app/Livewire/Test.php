<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Test as Table;
class Test extends Component
{

    public $states;
    public $output;
    public $campaigns = ['HVAC', 'Plumbing', 'Electrician', 'Roofing', 'Security Camera'];
    public $weekDays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    public function generate()
    {
        // Split the string into an array
        $states = explode(' | ', $this->states);

        // Shuffle the array
        shuffle($states);

        // Randomly decide how many names to pick (1-3)
        $numberOfStates = rand(1,2);

        // Get the selected number of names
        $selectedNames = array_slice($states, 0, $numberOfStates);

        // Convert back to a string (if needed)
        $output = implode(' | ', $selectedNames);

        $this->output = $output;
    }

    public function render()
    {
        $tests = Table::all();
        return view(
            'livewire.test',
            [
                'tests' => $tests
            ]
        );
    }
}
