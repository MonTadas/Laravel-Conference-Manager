<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body>
    <header>
        @yield('header')
        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
        @endauth
    </header>
    <div class="various-content">
        @yield('content')
    </div>
</body>

</html>
