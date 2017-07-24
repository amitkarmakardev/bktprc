@extends('layout.layout')

@section('subcontent')
    <div class="row">
        <div class="col-md-9">
            <div class="content">
                <h4>Photo Albums
                    <small class="pull-right"><a href="{{ url('album', ['create']) }}">add album</a></small>
                </h4>
                <hr>
                @foreach($album_list as $album)
                    <div class="col-md-4 col-sm-6 album">
                        @if($album->firstPhoto()!=null)
                            <div class="img-wrapper">
                                <img class="thumbnail img-responsive"
                                     src="{{ asset("storage/{$album->name}/".$album->firstPhoto())}}">
                            </div>
                        @endif
                        <div class="details">
                            <a class="name" href="{{ url('album', [$album->id]) }}">{{ $album->name }}</a>
                            <small class="text-muted">Uploaded: {{ $album->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-3">
            @include('layout.right-pane')
        </div>
    </div>
@stop