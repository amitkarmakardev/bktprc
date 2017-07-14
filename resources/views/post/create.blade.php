@extends('layout.layout')

@section('subcontent')
    <div class="row content">
        <h4>Create a post</h4>
        <hr>
        <form method="post" action="{{ url('post') }}" class="form form-horizontal">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label for="title" class="control-label col-sm-2">*Title</label>
                <div class="col-sm-6">
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" />
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
                <div class="col-sm-6">
                    <textarea name="body" class="form-control" rows="5">{{ old('body') }}</textarea>
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
                <div class="col-sm-6">
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