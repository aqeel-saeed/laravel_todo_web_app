<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Roboto Mono', monospace !important;
            }

            h1 {
                font-size: 48px;
                color: #333;
                text-shadow: 2px 2px #ddd;
                text-align: center;
                font-family: 'Montserrat', sans-serif;
            }

            h2 {
                font-size: 43px;
                color: #333;
                text-shadow: 2px 2px #ddd;
                font-family: 'Montserrat', sans-serif;
            }

            .task-status {
                padding: 0.15rem 0.5rem;
                border-radius: 0.25rem;
                font-size: 0.8rem;
                font-weight: 500;
            }

            .task-status--todo {
                background-color: #dc3545;
                color: #fff;
            }

            .task-status--in_progress {
                background-color: #ffc107;
                color: #000;
            }

            .task-status--done {
                background-color: #28a745;
                color: #fff;
            }

            .task-status--cancelled {
                background-color: #6c757d;
                color: #fff;
            }
        </style>
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a style="margin: 5px" class="navbar-brand" href="{{ route('tasks.index') }}">My Todo App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a style="margin: 5px" class="nav-link" href="{{ route('tasks.index') }}">All Tasks</a>
                </li>
                <li class="nav-item">
                    <a style="margin: 5px" class="nav-link" href="{{ route('tasks.create') }}">Create Task</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
