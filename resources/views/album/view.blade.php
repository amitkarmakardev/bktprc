@extends('layout.layout')

@section('subcontent')
    <div class="row content">
        <div class="col-md-12">
            <h4>{{ $album->name }}</h4>
            <hr>
            @if (count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ url('album', ['upload']) }}" method="post" enctype='multipart/form-data'>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="album_id" value="{{ $album->id }}">
                <input type="file" multiple="multiple" style="display: inline" name="photos[]">
                <input type="submit" value="Upload" class="btn btn-primary" style="display: inline">
            </form>
            <hr>
        </div>
    </div>
@stop