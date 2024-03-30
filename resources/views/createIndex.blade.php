@extends('layouts.main')
@push('head')
    <title>Add Todo</title>
@endpush

@section('main-section')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <div class="h2">
                Create Todo
            </div>
            <a href="{{ route('todo.home') }}" class="btn btn-primary">Back</a>
        </div>
        
        <div class="card">
            <div class="card-body">
                <form action="{{ route('todo.createTodo') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        <div class='text-danger'>
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="work" class="form-label">Work</label>
                        <input type="text" class="form-control" id="work" name="work">
                        <div class='text-danger'>
                            @error('work')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" name="status">
                            <option value="Work In Progress" selected>Work In Progress</option>
                            <option value="Open">Open</option>
                            <option value="Close">Close</option>
                          </select>
                        <div class='text-danger'>
                            @error('status')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Todo</button>
                </form>
            </div>
        </div>
    </div>
@endsection
