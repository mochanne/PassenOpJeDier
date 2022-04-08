@if (!$proposal->discarded)
    
<article class="proposal">
    <ul class="cardholder">
        <li class="card_out">
            @include('homes.components.index_item', ['home' => $proposal->home])
</li>
        <li class="card_out">

            @include('offers.components.index_item', ['offer'=>$proposal->offer])
</li>
    </ul>
    @if ($proposal->petowner_accepted && $proposal->homeowner_accepted)
        <h4>Active from {{explode(' ',$proposal->offer->start_time)[0]}} to {{explode(' ',$proposal->offer->end_time)[0]}}!</h4>
    @elseif ((!$proposal->homeowner_accepted && Auth::user()->id == $proposal->homeowner_id) || (!$proposal->petowner_accepted && Auth::user()->id == $proposal->petowner_id))
        <section class="proposalbuttons">

        <form action="/new/proposal/accept/{{$proposal->id}}" method="POST">
            @csrf
            <input type="submit" class="fancysubmit" value="Accept proposal">
        </form>
        <form action="/new/proposal/deny/{{$proposal->id}}" method="POST">
            @csrf
            <input type="submit" class="fancysubmit" value="Deny proposal">
        </form>
        </section>

    @else
    <h4>Awaiting confirmation...</h4>
    @endif
</article>

@endif
