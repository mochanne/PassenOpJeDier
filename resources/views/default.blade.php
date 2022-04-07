<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    @yield('head')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h2>Sittr.nl</h2>
        <h5>Crowdsourced petsitting</h5>
        
        @auth
            <p>Hello {{Auth::user()->name}} </p><a class="linkstyle" href="/logout/">log out</a>
        @endauth
        @guest
            <p>Welcome!</p>
            <a class="linkstyle" href="/login">log in</a>
            <a class="linkstyle" href="/register">register</a>
        @endguest

    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>