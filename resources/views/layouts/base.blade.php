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
    <header>
        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-danger" type="submit">Logout</button>
            </form>
        @endauth
        @guest
            <div style="display: flex; gap:10px;">
                <form action="{{ route('register') }}" method="GET">
                    <button class="btn btn-outline-secondary" type="submit">Register</button>
                </form>
                <form action="{{ route('login') }}" method="GET">
                    <button class="btn btn-outline-primary" type="submit">Login</button>
                </form>
            </div>

        @endguest
    </header>
    <div class="various-content">
        @yield('content')
    </div>
</body>

</html>
