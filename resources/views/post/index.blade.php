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
                <th>Action</th>
                <th>Created</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>Edit</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop