@extends('layout.layout')

@section('subcontent')
    <div class="row content">
    <div class="col-md-12">
        <h4>Albums <small class="pull-right"><a href="">add album</a></small></h4>
        <hr>
    </div>
        <div class="col-md-12">
            <table class="table table-hover">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
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