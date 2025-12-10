<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('js/tinymceinit.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body>
    <header class="navbar-header">
        <div style="display: flex; gap:10px;">
            <a href="{{ route("events.index") }}" class="btn btn-outline-primary">Home</a>
            @can('admin')
                <a href="{{ route('events.create') }}" class="btn btn-success">Create conference</a>
            @endcan
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-outline-danger" type="submit">Logout</button>
                </form>
            @endauth
            @guest
                <a href="{{ route('register') }}" class="btn btn-outline-secondary" type="submit">Register</a>
                <a href="{{ route('login') }}" class="btn btn-outline-primary" type="submit">Login</a>
            @endguest
        </div>

    </header>
    <div class="various-content">
        @yield('content')
    </div>
</body>

</html>
