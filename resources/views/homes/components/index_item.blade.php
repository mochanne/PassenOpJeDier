<article class="card userindex" data-card-type="home">
    <a class="card_in" href="/homes/{{ $home->id }}">
        <p class="card_title">
            {{$home->location}}
        </p>
        <a class="card_author linkstyle" href="/users/{{$home->owner_id}}">{{$home->GetOwner->name}}</a>
        <img class="card_avatar" src="{{$home->media}}"/>
    </a>
</article>
