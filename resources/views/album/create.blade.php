@extends('layout.layout')

@section('subcontent')
<div class="row content">
    <h4>Create an album</h4>
    <hr>
    <form method="post" action="{{ url('album') }}" class="form form-horizontal">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label for="name" class="control-label col-sm-2">Name</label>
        <div class="col-sm-8">
            <input type="text" name="name" class="form-control"/>        
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label col-sm-2">Description</label>
        <div class="col-sm-8">
            <textarea name="description" class="form-control" rows="5"></textarea>        
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <input style="margin-left: 10px" type="reset" value="Reset" class="btn btn-default pull-right"></input>
            <input type="submit" value="Submit"class="btn btn-primary pull-right"></input>
        </div>
    </div>
    </form>
</div>
@stop