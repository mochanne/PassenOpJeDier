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
        <ul class="navbar">

            <li class="logo">
                <a href="/">
                    <h1>Sittr.nl</h1>
                    <p>Crowdsourced petsitting</p>
                </a>
            </li>
            
            <li class="navs">
                <ul>
                    <li>
                        <a class="navs_button" href="/offers">Pets</a>
                    </li>
                    <li>                    
                        <a class="navs_button" href="/homes">Homes</a>
                    </li>
                    <li>
                        <a class="navs_button" href="/users">Users</a>
                    </li>
                </ul>    
            </li>
                
            @include('mycomponents.userpanel')
        </ul>

    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>