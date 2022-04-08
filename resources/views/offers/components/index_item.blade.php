


<article class="card card_offer" data-card-type="offer" data-pet-type="{{$offer->pet_type}}">
    <a class="card_in" href="/offers/{{ $offer->id }}">
        <figure class="card_avatar">
            <img alt="An image of a pet" src="{{$offer->media}}"/>
        </figure>
        <section class="card_details">
        <h1 class="card_title">
            {{$offer->pet_name}}
        </h1>

        <p>{{$offer->GetOwner->name}}</p>
        <p class="card_daterange">{{$offer->start_time}}</p>
        <p class="card_wage">${{$offer->wage}}</p>
        <p class="card_location">{{$offer->location}}</p>
    </section>
        
    </a>
</article>
