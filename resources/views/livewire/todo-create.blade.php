<div>
    <a href="/" class="btn btn-primary btn-sm mb-2" wire:navigate>Home</a>
    <form wire:submit='save' class="todo-create">
        <h4>Create Todo</h4>
        <input type="text" class="form-control" placeholder='Enter todo......' wire:model='name'>
        @error("name")
            <p class="text-danger"> *{{ $message }}*</p>
        @enderror
        <button type="submt" class="btn btn-primary btn-sm mt-3">Save</button>
    </form>

</div>
