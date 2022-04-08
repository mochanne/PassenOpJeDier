<article class="card panelbg card_type_@yield('card_type')" data-card-type="@yield('card_type')" @yield('card_data')>
    <a class="card_in" href="@yield('card_url')">
        <figure class="card_avatar">
            <img src="@yield('card_img')" alt="An image of a @yield('card_type')"/>
        </figure>
        <section class="card_details">
            <h1 class="card_title">
                @yield('card_title')
            </h1>
            @hasSection('card_author')
            <p class="card_author">@yield('card_author')</p>
            @endif
            @hasSection('card_daterange')
            <p class="card_daterange">@yield('card_daterange')</p>
            @endif
            @hasSection('card_wage')
            <p class="card_wage">$@yield('card_wage')</p>
            @endif
            @hasSection('card_location')
            <p class="card_location">@yield('card_location')</p>
            @endif
            @hasSection('card_allowedpets')
            <p clas="card_allowedpets">@yield('card_allowedpets')</p>
            @endif
        </section>

    </a>
</article>
