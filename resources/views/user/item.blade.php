<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>{{ ucfirst($user->fname) }}'s profile</title>
</head>
<body>
    <h1>{{$user->fname}} {{$user->lname}}</h1>
    <img src="{{$user->avatar}}" alt="profile picture"/>

    @if ($user->home_id)
        <a href="/homes/{{ $user->home_id }}">go to home</a>
    @endif
</body>
</html>