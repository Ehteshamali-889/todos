@extends('layouts.main')
@push('head')
    <title>Update Todo</title>
@endpush

@section('main-section')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <div class="h2">
                Update Todo
            </div>
            <a href="" class="btn btn-primary">Back</a>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('todo.updateTodo') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $todo->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="work" class="form-label">Work</label>
                        <input type="text" class="form-control" id="work" name="work"
                            value="{{ $todo->work }}">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="duedate" class="form-label">Due Date</label>
                        <input type="date" class="form-control" id="duedate"
                        name="duedate"
                        value="{{$todo->duedate}}"
                        >
                    </div> --}}
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" name="status">
                            <option value="Work In Progress" {{ $todo->status === "Work In Progress" ? "selected" : "" }}>Work In Progress</option>
                            <option value="Open" {{ $todo->status === "Open" ? "selected" : "" }}>Open</option>
                            <option value="Close" {{ $todo->status === "Close" ? "selected" : "" }}>Close</option>
                        </select>                        
                        <div class='text-danger'>
                            @error('status')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $todo->id }}">
                    <button type="submit" class="btn btn-primary">Update Todo</button>
                </form>
            </div>
        </div>
    </div>
@endsection
