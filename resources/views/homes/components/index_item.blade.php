<article class="card card_home" data-card-type="home">
    <a class="card_in" href="/homes/{{ $home->id }}">
        <figure class="card_avatar">
            <img class="card_avatar" alt="an image of a house" src="{{$home->media}}"/>
        </figure>
        <section class="card_details">
            <h1 class="card_title">
                {{$home->location}}
            </h1>
            <p class="card_author">{{$home->GetOwner->name}}</p>
            <p class="card_allowedpets">{{$home->allowed_pet_types}}</p>
        </section>

    </a>
</article>
