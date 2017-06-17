@extends('layout.layout')

@section('subcontent')

    <div class="modal fade" id="upload-form" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload photos</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ url('album', ['upload']) }}" method="post" enctype='multipart/form-data'>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="album_id" value="{{ $album->id }}">
                        <input type="file" multiple="multiple" style="display: inline" name="photos[]">
                        <input type="submit" value="Upload" class="btn btn-primary pull-right" style="display: inline">
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="row content">
        <div class="col-md-12 row">
            <h4 class="col-md-6 col-sm-6 col-xs-6">{{ $album->name }}</h4>
            <div class="col-md-6 col-xs-6">
                <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#upload-form">
                    <i class="fa fa-upload"></i> Upload Photos
                </button>
            </div>
            <div class="clearfix"></div>
            <hr>
        </div>
        <div class="col-md-12">
            <p class="text-info" style="padding:2px 18px 15px 18px; font-family: Bitter, serif">{{ $album->description }}</p>
        </div>
        <div class="col-md-12">
            <ul class="first">
                @foreach($album->photos as $photo)
                    <li>
                        <img src="{{ asset("storage/{$album->name}/{$photo->filename}") }}"
                             class="img-responsive img-thumbnail">
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@stop

@section('script')
    <script>
        $(document).ready(function () {
            $('ul.first').bsPhotoGallery({
                "classes": "col-md-4 col-sm-6 col-xs-6 col-xxs-12",
                "hasModal": true
            });
        });
    </script>
@stop