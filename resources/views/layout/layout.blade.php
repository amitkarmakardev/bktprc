@extends('app')

@section('content')
    <div class="container" style="margin-bottom: 30px; margin-top:52px">
        <img src="{{ asset('images/club.jpg') }}" / style="width: 100%; height: 350px">
    </div>
    <div class="container main-container">
        @include('layout.navbar')    
        
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