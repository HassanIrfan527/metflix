<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Plan;
use Dotenv\Exception\ValidationException;

class Pricing extends Component
{
    public $monthlyPlans;
    public $yearlyPlans;
    public $isYearly = false;
    public $selectedPlan;

    protected function rules()
    {
        $validPlans = array_merge(
            $this->monthlyPlans->pluck('title')->toArray()
        );

        return [
            'selectedPlan' => 'required|in:' . implode(',', $validPlans),
        ];
    }

    public function mount()
    {
        $this->monthlyPlans = Plan::where('interval', 'month')->get();
        $this->yearlyPlans = Plan::where('interval', 'year')->get();

    }

    public function togglePlan()
    {
        $this->isYearly = !$this->isYearly;
    }

    // Submission logic
    public function submit()
    {
        dd($this->selectedPlan);
        try {
            $this->validate();
            dd($this->selectedPlan);
            session('selectedPlan', $this->selectedPlan);
            return $this->redirect(route('register'), navigate: true);
        } catch (ValidationException $e) {
            dd($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.pricing');
    }
}
