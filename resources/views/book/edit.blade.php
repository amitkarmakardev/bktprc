@extends('layout.layout')

@section('subcontent')
    <div class="content" id='root'>
        <h4>Edit a book</h4>
        <hr>
        <form method="post" action="{{ url('book', [$book->id]) }}" class="form form-horizontal" autocomplete="off">
            @include('book._form-fields')
        </form>
    </div>

    <script>
        var app = new Vue({
            el: '#root',
            data: {
                book_id: "{{ $book->book_id }}",
                type: "{{ $book->type }}",
                name: "{{ $book->name }}",
                description: "{{ $book->description }}"
            }
        });
    </script>
@stop