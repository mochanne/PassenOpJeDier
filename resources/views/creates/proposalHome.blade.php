@extends('creates.formtemplate')

@section('title', 'Propose a deal to {{ $home->owner->name }}')

@section('form_content')
<h2>Propose a deal to {{ $home->owner->name }} about {{$home->location}}</h2>
@endsection

@section('target_url','/new/proposal/home/' . $home->id)

@section('form_inputs')
<label for="offer_id">Your pet</label>
<select name="offer_id" id="offer_id">
@foreach (Auth::user()->offers as $offer)
    <option value="{{$offer->id}}">{{$offer->pet_name}}</option>
@endforeach
</select>
@endsection