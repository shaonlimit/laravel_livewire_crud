<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoIndex extends Component
{
    public $todos = [];
    public function mount()
    {
        $this->todos = Todo::latest()->get();
    }
    public function delete(Todo $todo)
    {
        $todo->delete();
    }
    public function render()
    {
        return view('livewire.todo-index');
    }
}
