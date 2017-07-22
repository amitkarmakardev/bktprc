@extends('layout.layout')

@section('subcontent')

    <div class="row">
        <div class="col-md-9">
            @foreach($posts as $post)
                <div class="post">
                    <h4 class="subject" id="{{ $post->id }}">
                        {{ $post->title }}
                        <small class="pull-right">{{ $post->created_at->diffForHumans() }}</small>
                    </h4>
                    <hr>
                    <div id="Post{{ $post->id }}">
                        <div class="col-md-12 body">
                            {!! $post->body !!}
                        </div>
                        @if($post->album != null)
                            <div class="col-md-12 row" style="margin-top: 20px">
                                @foreach($post->album->photos as $photo)
                                    <div class="col-md-6 img-wrapper">
                                        <img src='{{ asset("storage/{$post->album->name}/{$photo->filename}") }}'
                                             class="img-responsive img-thumbnail"/>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                </div>
            @endforeach
        </div>
        <div class="col-md-3">
            <div class="box notice-box">
                <h4><i class="fa fa-pencil-square-o"></i> Notice</h4>
                <hr>
                <a href="#">Online quiz result <br> May 2017</a>
                <a href="#">Online application for badminton, volleyball</a>
                <a href="#"> অনলাইন কুইজ প্রতিযোগিতা</a>
            </div>
            <div class="box birthday-box">
                <h4><i class="fa fa-birthday-cake"></i> Birthdays</h4>
                <hr>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script>
        $(document).ready(function () {
            @foreach($posts as $post)
new Viewer(document.getElementById("Post{{ $post->id }}"));
            @endforeach
        });
    </script>
@stop