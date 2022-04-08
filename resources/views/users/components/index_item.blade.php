<article class="card card_home" data-card-type="user">
    <a class="card_in" href="/users/{{ $user->id }}">
        <figure class="card_avatar">
            <img class="card_avatar" alt="an image of a person" src="{{$user->avatar}}"/>
        </figure>
        <section class="card_details">
            <h1 class="card_title">
                {{$user->name}}
            </h1>
        </section>

    </a>
</article>