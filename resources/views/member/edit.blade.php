@extends('layout.layout')

@section('subcontent')
    <div class="content" id='root'>
        <h4>Edit a member</h4>
        <hr>
        <form method="post" action="{{ url('member', [$member->id]) }}" class="form form-horizontal" autocomplete="off">
            @include('member._form-fields')
        </form>
    </div>

    <script>
        var app = new Vue({
            el: '#root',
            data: {
                member_id: '{{ $member->member_id }}',
                type: '{{ $member->type }}',
                name: '{{ $member->name }}',
                associated_to: '{{ $member->associated_to }}',
                relation: '{{ $member->relation }}'
            }
        });
    </script>
@stop