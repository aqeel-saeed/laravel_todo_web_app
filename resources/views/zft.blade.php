@extends('layouts.app')
@section('title', 'index')

@section('content')
    <h1>Tasks</h1>
    <ul>
        @foreach ($tasks as $task)
            <li><a href="{{ route('welcome')}}">{{ $task->title }}, {{ $task->description }}</a></li>
        @endforeach
    </ul>
@endsection
