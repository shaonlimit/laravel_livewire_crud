<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoEdit extends Component
{

    public $todo;
    public $name;
    public function mount(Todo $todo)
    {
        $this->todo = $todo;
    }
    public function update()
    {
        $this->todo->update([
            'name' => $this->name,
        ]);
        return $this->redirect('/', navigate: true);
    }
    public function render()
    {
        return view('livewire.todo-edit')->extends('welcome');
    }
}
