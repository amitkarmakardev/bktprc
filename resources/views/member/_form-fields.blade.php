<input type="hidden" name="_token" value="{{csrf_token()}}">

<div class="form-group">
    <label for="name" class="control-label col-sm-2">Member ID</label>
    <div class="col-sm-8">
        <input name="member_id" class="form-control" v-model="member_id">
    </div>
    <div class="col-sm-4">
        @if($errors->has('member_id'))
            @foreach($errors->get('member_id') as $error)
                <span class="text-danger">{{ $error}}</span>
            @endforeach
        @endif
    </div>
</div>

<div class="form-group">
    <label for="type" class="control-label col-sm-2">Type</label>
    <div class="col-sm-8">
        <input type="radio" name="type" value="primary" v-model="type"> Primary
        <input type="radio" name="type" value="associate" v-model="type"> Associate
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

<div class="form-group" v-if="type=='associate'">
    <label for="name" class="control-label col-sm-2">Associated to</label>
    <div class="col-sm-8">
        <select type="text" name="associated_to" class="form-control" v-model="associated_to">
            @foreach($primary_members as $p_member)
                <option value="{{ $p_member->member_id }}">{{ $p_member->name }} ( {{ $p_member->member_id}}) </option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-4">
        @if($errors->has('associated_to'))
            @foreach($errors->get('associated_to') as $error)
                <span class="text-danger">{{ $error}}</span>
            @endforeach
        @endif
    </div>
</div>

<div class="form-group" v-if="type=='associate'">
    <label for="relation" class="control-label col-sm-2">Relation</label>
    <div class="col-sm-8">
        <input name="relation" type="radio" value="wife" v-model="relation"> Wife
        <input name="relation" type="radio" value="son" v-model="relation"> Son
        <input name="relation" type="radio" value="daughter" v-model="relation"> Daughter
        <input name="relation" type="radio" value="mother" v-model="relation"> Mother
        <input name="relation" type="radio" value="father" v-model="relation"> Father
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