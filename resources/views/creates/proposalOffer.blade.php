@extends('creates.formtemplate')

@section('title', 'Propose a deal to {{ $offer->owner->name }}')

@section('form_content')
<h2>Propose a deal to {{ $offer->owner->name }} about {{$offer->pet_name}}</h2>
@endsection

@section('target_url','/new/proposal/offer/' . $offer->id)

@section('form_inputs')
<label for="home_id">Your home</label>
<select name="home_id" id="home_id">
@foreach (Auth::user()->homes as $home)
    <option value="{{$home->id}}">{{$home->location}}</option>
@endforeach
</select>
@endsection