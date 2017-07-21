@extends('layout.layout')

@section('subcontent')
    <div class="row content">
        <div class="col-md-12">
            <h4>All Posts
                <small class="pull-right"><a href="{{ url('post', ['create']) }}">create</a></small>
            </h4>
            <hr>
        </div>
        <table class="table table-striped">
            <tr>
                <th>Post</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td><a title="Edit" class="btn btn-sm btn-success" href="{{ url('post', [$post->id, 'edit']) }}"><i class="fa fa-edit"></i></a> <a title="Delete" class="btn btn-sm btn-danger" href="{{ url('post', [$post->id, 'delete']) }}"><i class="fa fa-trash"></i></a></td>
                </tr>
            @endforeach
        </table>
    </div>
@stop