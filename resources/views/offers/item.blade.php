@extends('default')

@section('title')
    {{$offer->pet_name}}
@endsection

@section('content')
    @include('offers.components.index_item')
    {{$offer->pet_name}}
@endsection