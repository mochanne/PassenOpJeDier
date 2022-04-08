@extends('default')
@section('head')
<script src="/js/search.js"></script>
@endsection
@section('content')
    <section class="filterbar">
        <input type="text" id="searchbar" onchange="runsearch();">
        @hasSection('create_url')
        @auth
                <a class="fancylink" href="@yield('create_url')">Add new</a>
        @endauth
        @endif
    </section>
    <ul class="cardholder">
        @yield('cards')
    </ul>



@endsection