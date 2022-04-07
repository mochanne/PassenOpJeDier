@extends('creates.formtemplate')

@section('title', 'Review {{ $target->name }}')

@section('form_content')
<h2>{{ $target->name }}</h2>
@endsection

@section('target_url','/new/review/' . $target->id)

@section('form_inputs')
    <input type="range" min="0" max="10" id="score" name="score">
    <label for="score">Score</label>

    <label for="review_text">Review</label>
    <textarea name="review_text" id="review_text"></textarea>
@endsection