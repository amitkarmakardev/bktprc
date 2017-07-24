@extends('layout.layout')

@section('subcontent')
    <div class="content">
        <h4>Create a post</h4>
        <hr>
        <form method="post" action="{{ url('post') }}" class="form form-horizontal">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label for="title" class="control-label col-sm-2">*Title</label>
                <div class="col-sm-8">
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}"/>
                </div>
                <div class="col-sm-4">
                    @if($errors->has('title'))
                        @foreach($errors->get('title') as $error)
                            {{ $error}}
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="body" class="control-label col-sm-2">*Body</label>
                <div class="col-sm-8">
                    <textarea name="body" class="form-control" rows="15">{{ old('body') }}</textarea>
                </div>
                <div class="col-sm-4">
                    @if($errors->has('body'))
                        @foreach($errors->get('body') as $error)
                            {{ $error}}
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="album_id" class="control-label col-sm-2">Album</label>
                <div class="col-sm-8">
                    <select name="album_id" class="form-control">
                        <option value="">Select album</option>
                        @foreach($albums as $album)
                            <option value="{{ $album->id }}">{{ $album->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-4">
                    @if($errors->has('album_id'))
                        @foreach($errors->get('album_id') as $error)
                            {{ $error}}
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <input style="margin-left: 10px" type="reset" value="Reset" class="btn btn-default pull-right"/>
                    <input type="submit" value="Submit" class="btn btn-primary pull-right"/>
                </div>
            </div>
        </form>
    </div>
@stop
@section('script')
    <script>
        $(document).ready(function () {
            tinymce.init({
                selector: 'textarea',
                insert_toolbar: 'quickimage quicktable',
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
                ],
                toolbar1: 'insert | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'preview media | emoticons | help',
                relative_urls: false,

                image_class_list: [
                    {title: 'Image Full', value: 'img img-responsive post-image'},
                    {title: 'Thumbnail', value: 'img img-responsive img-thumbnail'}
                ],
                image_dimensions: false

            });
        });
    </script>
@stop