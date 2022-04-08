@extends('default')

@section('title', 'Home')

@section('content')
    <h1>Debug zone; redirects to /offers for now</h1>

    <ul>
        @foreach (['users','homes','offers'] as $page)
            <li>
                <a href="/{{$page}}">
                    {{$page}}
                </a>
            </li>
        @endforeach
    </ul>
@endsection