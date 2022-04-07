@extends('default')

@section('title')
    {{ $user->name . '\'s profile'}}
@endsection

@section('content')
    <h1>{{$user->name}}</h1>
    <img src="{{$user->avatar}}" alt="profile picture"/>

    @if ($user->blocked)
        <h3>This user has been banned.</h3>
    @else
    
        <h3>Pets</h3>
        @foreach ($user->offers as $offer)
            {{$offer-id}}
        @endforeach

        <h3>Homes</h3>
        @foreach ($user->homes as $home)
            {{$home->id}}
        @endforeach

        <h3>Reviews</h3>
        @foreach ($user->profile_reviews as $review)
            {{$review->id}}
        @endforeach

        @auth
        <form action="/new/review/{{$user->id}}" method="get">
            <input type="submit" value="Leave a review" 
            name="Submit" id="frm1_submit" />
        </form>
    @endif
    

    @endauth
        
@endsection