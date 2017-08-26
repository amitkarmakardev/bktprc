@extends('layout.layout')

@section('subcontent')
    <div class="content" id='root'>
        <h4>Create a book</h4>
        <hr>
        <form method="post" action="{{ url('book') }}" class="form form-horizontal" autocomplete="off">
            @include('book._form-fields')
        </form>
    </div>

    <script>
        var app = new Vue({
            el: '#root',
            data: {
                book_id: null,
                type: null,
                name: null,
                description: null
            }
        });
    </script>
@stop