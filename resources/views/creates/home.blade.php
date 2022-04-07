@extends('creates.formtemplate')

@section('title','Add new home')

@section('form_content')
    <h1>{{Auth::user()->name}}'s new home</h1>
@endsection

@section('target_url','/new/home')
@section('form_inputs')
    <label for="media">Picture:</label>
    <input type="file" name="media" id="media" accept="image/*,video/*">

    @foreach (\App\Models\PetType::all() as $type)
        <input type="checkbox" id="pettype_{{$type->type}}" name="allowed_pet_types[]" value="{{$type->type}}"></input>
        <label for="pettype_{{$type->type}}">{{$type->plural}}</label>
    @endforeach

    <label for="location">location</label>
    <input type="text" name="location" id="location">
    
    <label for="description">description</label>
    <textarea name="description" id="description"></textarea>
@endsection