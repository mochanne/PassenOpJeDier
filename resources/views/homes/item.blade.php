@extends('default')

@section('title', 'Home profile')

@section('content')
<section class="product_topbar">
<img src="{{$home->media}}" alt="Picture of a house"/>
<h1>{{$home->location}}</h1>
@auth
@if (($home->owner_id == Auth::user()->id) || Auth::user()->admin)
<a href="/new/proposal/home/{{$home->id}}" class="fancysubmit">Make proposal</a>
<form method="POST" action="/new/deletion/home/{{$home->id}}">
    @csrf
    <input class="fancysubmit" type="submit" value="Delete post">
</form>
@endif
@endauth
</section>
<article class="profile_content">
    <h3>About {{$home->location}}</h3>
    <p class="profile_description">{{$home->description}}</p>
    <h3>Allowed pets</h3>
    <p>{{$home->allowed_pet_types}}</p>
    <h3>About the owner</h3>
    <ul class="cardholder">
        <li class="card_out">
            @include('users.components.index_item', ['user' => $home->GetOwner])
        </li>
    </ul>
    @if (Auth::user()->id == $home->owner_id)
        <h3>Proposals</h3>
        <ul class="proposalholder">

            @foreach ($home->proposals as $proposal)
            <li class="card_out">
                @include('proposal')
            </li>
            @endforeach
        </ul>
    @endif
</article>
@endsection