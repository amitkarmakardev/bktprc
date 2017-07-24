@extends('app')

@section('content')
    @include('layout.navbar')
    <div id="banner">
        <div id="banner-text">
            <h1>#GetItDone</h1>
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