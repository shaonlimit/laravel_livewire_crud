<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Todo</th>
            <th scope="col">Actions</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($todos as $key => $todo)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $todo->name }}</td>
                <td>
                    <a href="/todo/view/{{ $todo->id }}" class="btn btn-info btn-sm" wire:navigate>View</a>
                    <a href="/todo/edit/{{ $todo->id }}" class="btn btn-warning btn-sm" wire:navigate>Edit</a>
                    <a type="button" wire:click='delete({{ $todo->id }})' class="btn btn-danger btn-sm">Delete</a>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
