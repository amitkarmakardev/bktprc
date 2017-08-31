@extends('layout.layout')

@section('subcontent')
    <div class="content">
        <h4>Issue book</h4>
        <hr>
        @include('layout.status')
        <form method="post" action="{{ url('book', ['issue']) }}" class="form-vertical" autocomplete="off">
        <input type="hidden" name="_token", value="{{ csrf_token() }}">
        <div class="row" style="padding: 10px">        
            <div class="form-group col-md-4">
              <input type="text" name="book_id" class="form-control" placeholder="Enter Book Accession ID">
            </div>
            <div class="form-group col-md-4">
              <input type="text" name="issued_to" class="form-control" placeholder="Enter Member ID">
            </div>
            <div class="form-group col-md-4">
              <button type="submit" class="btn btn-primary">Issue </button>
            </div>
            @if($errors->any())
            <div class="form-group col-md-4">
                @foreach($errors->get('book_id') as $error)
                    <span class="text-danger">{{ $error }}</span>
                @endforeach
            </div>
            <div class="form-group col-md-4">
                @foreach($errors->get('issued_to') as $error)
                    <span class="text-danger">{{ $error }}</span>
                @endforeach
            </div>
            @endif
        </div>
        
        </form>
        <h4>Receive Book</h4>
        <hr>
        <table class="table table-hover">
        <thead>
           <tr>
               <th>Accession ID</th>
               <th>Issued To</th>
               <th>Issued On</th>
               <th>Receive</th>
           </tr>
        </thead>
        <tbody>
            @foreach($ir_list as $ir)
                <tr>
                    <td>{{ $ir->book_id}}</td>
                    <td>{{ $ir->issued_to}}</td>
                    <td>{{ $ir->created_at->toDateString() }}</td>
                    <td><a href="{{ url('book', [$ir->id, 'receive']) }}" class="btn btn-success" onclick="return confirm('Do you want to receive this book?')">Receive</a></td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@stop

