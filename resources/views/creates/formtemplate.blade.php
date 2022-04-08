@extends('default')


@section('content')
    <section class="form_content">
        @yield('form_content')
    </section>


    <form class="form_inputs" action="@yield('target_url')" data-validate="@yield('nonempty_names')" method="POST">
        @csrf
        <section class="form_inputs_inside">
            @yield('form_inputs')
        </section>
        <input type="submit" value="Submit">
    </form>
@endsection