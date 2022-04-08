<section class="userpanel">
    @auth
    <p class="userpanel_greet">Hello <a href="/users/{{Auth::user()->id}}"}>{{Auth::user()->name}}</a> </p>
    <a class="fancylink" href="/logout/">log out</a>
    @endauth
    @guest
    <p class="userpanel_greet">Welcome!</p>
    <a class="fancylink userpanel_login" href="/login">log in</a>
    <a class="fancylink" href="/register">register</a>
    @endguest
</section>