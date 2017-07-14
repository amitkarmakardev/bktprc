@extends('layout.layout')

@section('subcontent')

<div class="row">
    <div class="col-md-9">
    @foreach($posts as $post)
        <div class="row content">
            <div class="col-md-12">
                <h4 class="subject">
                    {{ $post->title }} <small class="pull-right">{{ $post->created_at->diffForHumans() }}</small>
                </h4>
                <hr>
            </div>
            <div class="col-md-12 article">
                {{ $post->body }}
            </div>
            
            @if($post->album != null)
                <div class="col-md-12" style="margin-top: 20px">
                    <ul class="first">
                        @foreach($post->album->photos as $photo)
                            <li>
                                <img src='{{ asset("storage/{$post->album->name}/{$photo->filename}") }}' class="img-responsive img-thumbnail"/>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    @endforeach
    </div>
    <div class="col-md-3">
        <div class="box notice-box">
            <h4> <i class="fa fa-pencil-square-o"></i> Notice</h4>
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
            $('ul.first').bsPhotoGallery({
                "classes": "col-md-6 col-sm-6 col-xs-6 col-xxs-12",
                "hasModal": true
            });
        });
    </script>
@stop