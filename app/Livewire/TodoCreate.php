<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoCreate extends Component
{
    public $name;
    public function save()
    {

        $this->validate([
            'name' => ['required', 'unique:todos']
        ], [

            'name.required' => 'At least one todo is required',
            'name.unique' => 'Todo must be unique'
        ]);
        Todo::create($this->all());
        $this->reset();
        return $this->redirect('/', navigate: true);
    }
    public function render()
    {
        return view('livewire.todo-create')->extends('welcome');
    }
}
