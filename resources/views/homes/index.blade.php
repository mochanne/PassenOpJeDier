@extends('cardsindex')

@section('title','All homes')

@section('create_url','/new/home')

@section('cards')
        @foreach ($homes as $home)
            <li>
                @include('homes.components.index_item')
            </li>
        @endforeach
@endsection