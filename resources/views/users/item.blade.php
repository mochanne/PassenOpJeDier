@extends('default')

@section('title')
    {{ $user->name . '\'s profile'}}
@endsection

@section('content')
    <h1>{{$user->name}}</h1>
    <img src="{{$user->avatar}}" alt="profile picture"/>

    @if ($user->blocked)
        <h3>This user has been banned.</h3>
    @endif

    @if ($user->home_id)
        <a href="/homes/{{ $user->home_id }}">go to home</a>
    @endif

@endsection