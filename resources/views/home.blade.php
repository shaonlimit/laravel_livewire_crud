@extends("welcome")
@section("content")
    <a href="/todo/create" wire:navigate class="btn btn-success btn-sm">Create Todo</a>
    @livewire("TodoIndex")
@endsection
