@extends('creates.formtemplate')

@section('title','Add new home')

@section('form_content')
    <h1>{{Auth::user()->name}}'s new home</h1>
@endsection

@section('target_url','/new/home')
@section('form_inputs')
    <label for="media">Picture</label>
    <input required type="file" name="media" id="media" accept="image/*,video/*">

    <label for="checkholder">Allowed pets</label>
    <section id="checkholder" class="formgroup">
    @foreach (\App\Models\PetType::all() as $type)
        <input type="checkbox" id="pettype_{{$type->type}}" name="allowed_pet_types[]" value="{{$type->type}}"></input>
        <label for="pettype_{{$type->type}}">{{$type->plural}}</label>
    @endforeach
    </section>

    <label for="location">location</label>
    <input required type="text" name="location" id="location">
    
    <label for="description">description</label>
    <textarea required name="description" id="description"></textarea>
@endsection