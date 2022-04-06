<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>All users</title>
</head>
<body>
    <ul>
        @foreach ($users as $user)
            @if ($user->blocked == false)
                <li>
                    @include('user.components.index_item')            
                </li>
            @endif
        @endforeach
    </ul>
</body>
</html>