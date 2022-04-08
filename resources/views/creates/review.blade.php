@extends('creates.formtemplate')

@section('title', 'Review {{ $target->name }}')

@section('form_content')
<h2>Review {{ $target->name }}</h2>
@endsection

@section('target_url','/new/review/' . $target->id)

@section('form_inputs')
<label for="score">Score</label>
    <input required type="number" min="1" max="10" value="1" id="score" name="score">

    <label for="review_text">Review</label>
    <textarea required name="review_text" id="review_text"></textarea>
@endsection