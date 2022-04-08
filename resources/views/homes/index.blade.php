@extends('cardsindex')

@section('title','All homes')

@section('create_url','/new/home')

@section('filters')
<label for="cat_filter_id" >Cat</label>
<input class="index_filters" id="cat_filter_id" oninput="reverse_filter('pet_type');" type="checkbox" data-pet_type="cat">
<label for="dog_filter_id" >Dog</label>
<input class="index_filters"  id="dog_filter_id" oninput="reverse_filter('pet_type');" type="checkbox" data-pet_type="dog">
<label for="fish_filter_id" >Fish</label>
<input class="index_filters"  id="fish_filter_id" oninput="reverse_filter('pet_type');" type="checkbox" data-pet_type="fish">
@endsection

@section('cards')
        @foreach ($homes as $home)
            @if (!$home->discarded && !$home->owner->blocked)
                
            <li class="card_out" data-pet_type="{{$home->allowed_pet_types}}">
                @include('homes.components.index_item')
            </li>
            @endif
        @endforeach
@endsection