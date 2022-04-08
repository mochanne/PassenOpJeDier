@extends('cardsindex')

@section('title','All pets')

@section('create_url','/new/offer')

@section('filters')
<label for="cat_filter_id" >Cat</label>
<input class="index_filters" id="cat_filter_id" oninput="runfilter('pet_type');" type="checkbox" data-pet_type="cat">
<label for="dog_filter_id" >Dog</label>
<input class="index_filters"  id="dog_filter_id" oninput="runfilter('pet_type');" type="checkbox" data-pet_type="dog">
<label for="fish_filter_id" >Fish</label>
<input class="index_filters"  id="fish_filter_id" oninput="runfilter('pet_type');" type="checkbox" data-pet_type="fish">
@endsection

@section('cards')
        @foreach ($offers as $offer)
        @if (!$offer->discarded && !$offer->owner->blocked)
            <li class="card_out" data-pet_type="{{$offer->pet_type}}">
                @include('offers.components.index_item')
            </li>
        @endif
        @endforeach
@endsection