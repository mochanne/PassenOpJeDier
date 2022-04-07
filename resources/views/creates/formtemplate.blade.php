@extends('default')


@section('content')
    <section class="form_content">
        @yield('form_content')
    </section>

    <form action="@yield('target_url')" data-validate="@yield('nonempty_names')" method="POST">
        @csrf
        @yield('form_inputs')
        <input type="submit" value="Submit">
    </form>
@endsection