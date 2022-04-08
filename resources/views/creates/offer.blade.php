@extends('creates.formtemplate')

@section('title','Add new pet')

@section('form_content')
    <h1>{{Auth::user()->name}}'s new pet</h1>
@endsection

@section('target_url','/new/offer')
@section('form_inputs')

    <label for="location">location</label>
    <input required type="text" name="location" id="location">


    <label for="pet_name">Pet name</label>
    <input required type="text" name="pet_name" id="pet_name">
    
    <label for="radioholder">Pet type</label>
    <section class="formgroup" id="radioholder">
        @foreach (\App\Models\PetType::all() as $type)
        <input required type="radio" id="pettype_{{$type->type}}" name="pet_type" value="{{$type->type}}">
        <label for="pettype_{{$type->type}}">{{$type->type}}</label>
        @endforeach
    </section>


    <label for="start_time">Starting on</label>
    <input required type="datetime-local" id="start_time" name="start_time">

    <label for="end_time">Ending on</label>
    <input required type="datetime-local" id="end_time" name="end_time">
    
    
    <label for="wage">Offered wage per hour</label>
    <input required type="number" id="wage" name="wage" min="0.00" max="99999.999" step="0.01" value="10.0">

    <label for="media">Picture</label>
    <input type="file" name="media" id="media" accept="image/*,video/*">
    
    <label for="description">Description</label>
    <textarea name="description" id="description"></textarea>
    @endsection