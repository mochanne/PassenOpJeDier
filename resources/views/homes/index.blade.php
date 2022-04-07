@extends('default')

@section('title','All homes')

@section('content')
    <ul>
        @foreach ($homes as $home)
            <li>
                @include('homes.components.index_item')
            </li>
        @endforeach
    </ul>
@endsection