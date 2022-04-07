<article class="card" data-card-type=">
    <a class="card_in" href="/users/{{ $user->id }}">
        <p class="card_title">
            {{$user->name}}
        </p>
        <img class="card_avatar" src="{{$user->avatar}}"/>
    </a>
</article>
