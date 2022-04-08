@extends('card')

@section('card_type', 'user')

@section('card_img', $user->avatar)

@section('card_url', '/users/' . $user->id)

@section('card_title', $user->name)