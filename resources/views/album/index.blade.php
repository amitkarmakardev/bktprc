@extends('layout.layout')

@section('subcontent')
    <div class="row content">
    <div class="col-md-12">
        <h4>Albums <small class="pull-right"><a href="{{ url('album', ['create']) }}">add album</a></small></h4>
        <hr>
    </div>
        <div class="col-md-12">
            <table class="table table-hover">
                @foreach($album_list as $album)
                    <tr>
                        <td>{{$album->name}}</td>
                        <td>{{$album->description}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop