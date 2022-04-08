@extends('cardsindex')

@section('title','All pets')

@section('create_url','/new/offer')

@section('cards')
        @foreach ($offers as $offer)
            <li>
                @include('offers.components.index_item')
            </li>
        @endforeach
@endsection