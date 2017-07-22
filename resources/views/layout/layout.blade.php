@extends('app')

@section('content')

    @include('layout.navbar')
    {{--<img src="{{ asset('images/header.jpg') }}" alt="Header" style="width: 100%; height: 400px; margin-top: 10px; opacity: 0.8">--}}
    <div id="banner">
        <div class="container">
            <div id="banner-text">
                <h1 style="color: white; font-size: 4.5em; font-family: Bitter, serif">Nimnochaap</h1>
            </div>
        </div>
    </div>
    <div class="container main-container">
        <div class="row">
            <div class="col-md-2 col-sm-12">
                @include('layout.sidemenu')
            </div>
            <div class="col-md-10 col-sm-12">
                @yield('subcontent')
            </div>
        </div>
    </div>
@stop