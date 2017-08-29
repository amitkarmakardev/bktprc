<input type="hidden" name="_token" value="{{csrf_token()}}">

<div class="form-group">
    <label for="type" class="control-label col-sm-2">Type</label>
    <div class="col-sm-8">
        <input type="radio" name="type" value="Book" v-model="type"> Book
        <input type="radio" name="type" value="Magazine" v-model="type"> Magazine
    </div>
    <div class="col-sm-4">
        @if($errors->has('type'))
            @foreach($errors->get('type') as $error)
                <span class="text-danger">{{ $error}}</span>
            @endforeach
        @endif
    </div>
</div>

<div class="form-group">
    <label for="book_id" class="control-label col-sm-2">Accession ID</label>
    <div class="col-sm-8">
        <input name="book_id" class="form-control" v-model="book_id">
    </div>
    <div class="col-sm-4">
        @if($errors->has('book_id'))
            @foreach($errors->get('book_id') as $error)
                <span class="text-danger">{{ $error}}</span>
            @endforeach
        @endif
    </div>
</div>

<div class="form-group">
    <label for="name" class="control-label col-sm-2">Name</label>
    <div class="col-sm-8">
        <input name="name" class="form-control" v-model="name">
    </div>
    <div class="col-sm-4">
        @if($errors->has('name'))
            @foreach($errors->get('name') as $error)
                <span class="text-danger">{{ $error}}</span>
            @endforeach
        @endif
    </div>
</div>

<div class="form-group">
    <label for="synopsis" class="control-label col-sm-2">Synopsis</label>
    <div class="col-sm-8">
        <textarea name="synopsis" class="form-control" rows="5" v-model="synopsis"></textarea>
    </div>
    <div class="col-sm-4">
        @if($errors->has('synopsis'))
            @foreach($errors->get('synopsis') as $error)
                <span class="text-danger">{{ $error}}</span>
            @endforeach
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <input style="margin-left: 10px" type="reset" value="Reset"
                class="btn btn-default pull-right"/>
        <input type="submit" value="Submit" class="btn btn-primary pull-right"/>
    </div>
</div>