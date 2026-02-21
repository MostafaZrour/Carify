@extends('layouts.clean')

@section('childContent')
    @include('layouts.partials.header')
    @yield('content')
    @hasSection('footerLinks')
        <footer>
            @section('footerLinks')
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            @show
        </footer>
    @endif
@endsection
