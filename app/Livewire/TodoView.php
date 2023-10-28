<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoView extends Component
{
    public $todo = [];
    public function mount(Todo $id)
    {
        $this->todo = $id;
    }
    public function render()
    {
        return view('livewire.todo-view')->extends('welcome');
    }
}
