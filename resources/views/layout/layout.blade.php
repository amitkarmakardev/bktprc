@extends('app')

@section('content')

    @include('layout.navbar')
    <div id="banner"></div>
    <div class="container main-container">
        <div class="row">
            <div class="col-md-2">
                @include('layout.sidemenu')
            </div>
            <div class="col-md-10">
                @yield('subcontent')
            </div>
        </div>
    </div>
    </div>
@stop