@extends('default')

@section('title')
    {{$offer->pet_name}}
@endsection

@section('content')
<section class="product_topbar">
<img src="{{$offer->media}}" alt="Picture of a {{$offer->pet_type}}"/>
<h1>{{$offer->pet_name}}</h1>
@auth
@if (($offer->owner_id == Auth::user()->id) || Auth::user()->admin)
<a href="/new/proposal/offer/{{$offer->id}}" class="fancysubmit">Make proposal</a>
<form action="/new/deletion/offer/{{$offer->id}}" method="POST">
    @csrf
    <input class="fancysubmit" type="submit" value="Delete post">
</form>
@endif
@endauth
</section>
    <!-- @include('offers.components.index_item') -->
    <!-- {{$offer->pet_name}} -->
    <section class="profile_content">
    <h3>About {{$offer->pet_name}}</h3>
    <p class="profile_description">{{$offer->description}}</p>
    <h3>Details</h3>
    <p>Hourly wage: ${{$offer->wage}}</p>
    <p>Location: {{$offer->location}}</p>
    <p>Pet type: {{$offer->pet_type}}</p>

    <h3>About the owner</h3>
    <ul class="cardholder">
        <li class="card_out">
            @include('users.components.index_item', ['user' => $offer->owner])
        </li>
    </ul>

    @if (Auth::user()->id == $offer->owner_id)
        <h3>Proposals</h3>
        <ul class="proposalholder">
        @foreach ($offer->proposals as $proposal)
            <li>
            @include('proposal')
            </li>
        @endforeach
</ul>
    @endif
</section>
@endsection

