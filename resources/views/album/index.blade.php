@extends('layout.layout')

@section('subcontent')
    <div class="row content">
        <div class="col-md-12">
            <h4>Albums
                <small class="pull-right"><a href="{{ url('album', ['create']) }}">add album</a></small>
            </h4>
            <hr>
        </div>
        @foreach($album_list as $album)
            <div class="col-md-4 col-sm-6 album">
                @if($album->firstPhoto()!=null)
                    <img class="thumbnail img-responsive"
                         src="{{ asset("storage/{$album->name}/".$album->firstPhoto())}}">
                @endif
                <div class="details">
                    <a class="name" href="{{ url('album', [$album->id]) }}">{{ $album->name }}</a>
                    <small class="text-muted">Uploaded: {{ $album->created_at->diffForHumans() }}</small>
                </div>
            </div>
        @endforeach
    </div>
@stop