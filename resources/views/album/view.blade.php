@extends('layout.layout')

@section('subcontent')
    <div class="row content">
        <div class="col-md-12">
            <h4>{{ $album->name }}
                <small class="pull-right"><a href="{{ url('album', ['upload', $album->id]) }}">add photos</a></small>
            </h4>
            <hr>
            <p style="font-style: italic">Bakreswar Thermal Power Plant organized Urza 2017, a fun packed family entertainment gathering at Srijoni
                auditorium. Various stage performance, a cheering crowd made a lot of shout in broad daylight!</p>
        </div>
    </div>
@stop