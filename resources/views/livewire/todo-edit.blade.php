<div>

    <a href="/" class="btn btn-primary btn-sm mb-2" wire:navigate>Home</a>
    <form wire:submit='update' class="todo-create">
        <h4>Edit Todo</h4>
        <input value="{{ $todo->name }}" type="text" class="form-control" placeholder='Enter todo......' wire:model='name'>
        <button type="submit" class="btn btn-primary btn-sm mt-3">Save</button>
    </form>

</div>
