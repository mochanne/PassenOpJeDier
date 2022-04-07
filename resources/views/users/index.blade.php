@extends('default')

@section('title','All users')

@section('content')
<ul>
        @foreach ($users as $user)
            @if ($user->blocked == false)
                <li>
                    @include('users.components.index_item')            
                </li>
            @endif
        @endforeach
</ul>
@endsection