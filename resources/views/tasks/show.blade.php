@extends('layouts.app')
@section('title', $task->title)

@section('content')
    <h2>{{ $task->title }}</h2>
    <p>{{ $task->description }}</p>
    <div class="d-flex align-items-center">
        <p>Status: </p>
        <span style="margin:0px 10px 10px 10px" class="task-status task-status--{{ $task->status }}">
            {{ ucfirst($task->status) }}
        </span>
    </div>

    <div class="text-center d-flex align-items-center" style=" margin-top:10px">
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>
        <div class="col-md-2">
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
