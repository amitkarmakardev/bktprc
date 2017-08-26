@extends('layout.layout')

@section('subcontent')
    <div class="content" id='root'>
        <h4>Create a member</h4>
        <hr>
        <form method="post" action="{{ url('member') }}" class="form form-horizontal" autocomplete="off">
            @include('member._form-fields')
        </form>
    </div>

    <script>
        var app = new Vue({
            el: '#root',
            data: {
                member_id: null,
                type: null,
                name: null,
                associated_to: null,
                relation: null
            }
        });
    </script>
@stop