<article class="userindex_card_out">
    <a class="userindex_card_in" href="/users/{{ $user->id }}">
        <p class="userindex_card_name">
            {{$user->fname}} {{$user->lname}}
        </p>
        <img class="userindex_card_avatar" src="{{$user->avatar}}"/>
    </a>
</article>
