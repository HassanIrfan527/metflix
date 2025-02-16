<?php
namespace App\Livewire;
use Livewire\Component;

class Calculator extends Component
{
    public $number1, $number2, $result='';
    public $action = ['+', '-', '*', '/'];
    public $actionNum = '+';

    public function changeText($text)
    {
        $this->actionNum = $text;
    }

    public function calculate()
    {
        if (!in_array($this->actionNum, $this->action)) {
            $this->result = 'Invalid operation';
            return;
        }

        if ($this->actionNum === '/' && $this->number2 == 0) {
            $this->result = 'Division by zero error';
            return;
        }

        match ($this->actionNum) {
            '+' => $this->result = $this->number1 + $this->number2,
            '-' => $this->result = $this->number1 - $this->number2,
            '*' => $this->result = $this->number1 * $this->number2,
            '/' => $this->result = $this->number1 / $this->number2,
        };
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
