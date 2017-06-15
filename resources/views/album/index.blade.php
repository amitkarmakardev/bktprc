@extends('layout.layout')

@section('subcontent')
    <div class="row content">
        <div class="col-md-12">
            <h4>Albums
                <small class="pull-right"><a href="{{ url('album', ['create']) }}">add album</a></small>
            </h4>
            <hr>
        </div>
        <div class="col-md-12">
            <ul style="list-style-type: none">
                @foreach($album_list as $album)
                    <li>
                        <div class="row">
                            <div class="col-md-3"><a href="{{ url('album', [$album->id]) }}">{{$album->name}}</a></div>
                            <div class="col-md-9"><p>{{$album->description}}</p></div>
                        </div>

                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@stop