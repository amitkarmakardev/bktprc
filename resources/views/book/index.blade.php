@extends('layout.layout')

@section('subcontent')
    <div class="content">
        <h4>All books (<a href="{{ url('book', ['create']) }}">+</a>)</h4>
        <hr>
        <table class="table table-hover">
        <thead>
           <tr>
               <th>Accession ID</th>
               <th>Type</th>
               <th>Book Name</th>
               <th>Edit</th>
           </tr>
        </thead>
        <tbody>
            @foreach($book_list as $book)
                <tr>
                    <td>{{ $book->book_id}}</td>
                    <td>{{ $book->type}}</td>
                    <td>{{ $book->name }}</td>
                    <td><a href="{{ url('book', [$book->id, 'edit']) }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@stop