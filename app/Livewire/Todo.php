<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo as TodoModel;

class Todo extends Component
{
    public $todos;
    public string $todoText = '';

    public function todoList(){
        $this->todos = TodoModel::orderBy('created_at', 'desc')->get();
    }
    public function addTodo(){
        $todo = new TodoModel();
        $todo->todo = $this->todoText;
        $todo->completed = false;
        $todo->save();

        $this->todoText = '';
        $this->todoList();
    }
    public function delTodo($id){
        $todo = TodoModel::where('id', $id)->first();
        $todo->delete();

        $this->todoText = '';
        $this->todoList();
    }
    public function toggleTodo($id){
        $todo = TodoModel::where('id', $id)->first();
        $todo->completed = !$todo->completed;
        $todo->save();

        $this->todoText = '';
        $this->todoList();
    }
    public function updateTodo($id, $text){
        $todo = TodoModel::where('id', $id)->first();
        $todo->todo = $text;
        $todo->save();

        $this->todoText = '';
        $this->todoList();
    }
    public function mount()
    {
        $this->todoList();
    }
    public function render()
    {
        return view('livewire.todo');
    }
}
