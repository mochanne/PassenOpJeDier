@extends('cardsindex')

@section('title','All users')


@section('cards')
    @foreach ($users as $user)
        @if ($user->blocked == false)
            <li>
                @include('users.components.index_item')            
            </li>
        @endif
    @endforeach
@endsection