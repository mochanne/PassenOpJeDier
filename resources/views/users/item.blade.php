@extends('default')

@section('title')
    {{ $user->name . '\'s profile'}}
@endsection

@section('content')
    <section class="profile_topbar">
        <img src="{{$user->avatar}}" alt="profile picture"/>
        <h1>{{$user->name}}'s profile</h1>
        @auth
            
        @if (Auth::user()->admin)
        <form class="profile_admintab" method="POST" action="/new/block/{{$user->id}}">
            @csrf
            <label for="admin_changeblocked">Set blocked</label>
            <select name="state" id="admin_changeblocked">
            <option value="true">Blocked</option>
            <option value="false">Unblocked</option>
        </select>
        <input type="submit" value="Submit">
    </form>
    @endif
    @endauth
    </section>

    @if ($user->blocked)
        <h3>This user has been banned.</h3>
    @else
    
        <h3>Pets</h3>
        <article class="cardholder">
            @foreach ($user->offers as $offer)
                <li class="card_out">
                    @include('offers.components.index_item')
                    <!-- {{$offer->id}} -->
                </li>
                @endforeach
        </article>

        <h3>Homes</h3>
        <article class="cardholder">
            @foreach ($user->homes as $home)
            <li class="card_out">
            @include('homes.components.index_item')
            </li>
        @endforeach
        </article>

        <h3>Reviews</h3>
        <ul class="reviewholder">
            @foreach ($user->profile_reviews as $review)
            <li>
                @include('users.components.review')
            </li>
            @endforeach
        </ul>

        @auth
        @if(Auth::user()->can_review($user)) 
        <form action="/new/review/{{$user->id}}" method="get">
            <input class="fancysubmit" type="submit" value="Leave a review" 
            name="Submit" id="frm1_submit" />
        </form>
    @endif
    @endif
    

    @endauth
        
@endsection