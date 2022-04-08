<article class="review">
    <section class="review_header">
        <figure>
            <img src="{{$review->GetPoster->avatar}}" class="review_img">
        </figure>
        <p class="review_score">{{ $review->score}}</p>
        <a href="/users/{{$review->poster_id}}" class="review_sender">{{$review->GetPoster->name}}</a>
    </section>
    <p class="review_text">{{ $review->review_text}}</p>
</article>