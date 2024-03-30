@extends('layouts.main')
@push('head')
    <title>Todo List App</title>
@endpush

@section('main-section')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <div class="h2">
                All Todos
            </div>
            <a href="{{route('todo.create')}}" class="btn btn-primary">Add Todo</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        <table class="table table-striped table-dark">
            <tr>
                <th>Todo Title</th>
                <th>Detail</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            @foreach ($todos as $todo)
                <tr valign="middle">
                    <td>{{$todo->name}}</td>
                    <td>{{$todo->work}}</td>
                    <td>{{$todo->status}}</td>
                    <td>
                        <a href="{{route('todo.edit', $todo->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('todo.delete', $todo->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection