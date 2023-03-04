@extends('layouts.app')
@section('title', 'My Tasks')

@section('content')

    <h1 class="text-center">Tasks</h1>

    <form action="{{ route('tasks.index') }}" method="GET">
        <div class="form-group">
            <label style="margin: 10px" for="status">- Filter by status:</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="status[]" id="status-todo" value="todo" {{ in_array('todo', old('status', [])) ? 'checked' : '' }}>
                <label class="task-status task-status--todo form-check-label" for="status-todo">
                    Todo
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="status[]" id="status-done" value="done" {{ in_array('done', old('status', [])) ? 'checked' : '' }}>
                <label class="task-status task-status--done form-check-label" for="status-done">
                    Done
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="status[]" id="status-in-progress" value="in_progress" {{ in_array('in_progress', old('status', [])) ? 'checked' : '' }}>
                <label class="task-status task-status--in_progress form-check-label" for="status-in-progress">
                    In Progress
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="status[]" id="status-cancelled" value="cancelled" {{ in_array('cancelled', old('status', [])) ? 'checked' : '' }}>
                <label class="task-status task-status--cancelled form-check-label" for="status-cancelled">
                    Cancelled
                </label>
            </div>
        </div>
        <button style="margin: 10px" type="submit" class="btn btn-primary">Filter</button>
    </form>

    <ul class="list-group">
        @foreach ($tasks as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="col-md-8">
                    <div>
                        {{ $task->title }}
                        <span class="task-status task-status--{{ $task->status }}">
                            {{ ucfirst($task->status) }}
                        </span>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('tasks.show', $task->id) }}" class="float-right btn btn-sm btn-primary">Show</a>
                </div>
                <div class="col-md-2">
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
    <div class="text-center" style=" margin:10px">
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">New Task</a>
    </div>
@endsection
