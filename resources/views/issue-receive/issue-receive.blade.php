@extends('layout.layout')

@section('subcontent')
    <div class="content">
        <h4>Issue book</h4>
        <hr>
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
                    <td>{{ $ir->ir_id}}</td>
                    <td>{{ $ir->type}}</td>
                    <td>{{ $ir->name }}</td>
                    <td><a href="{{ url('ir', [$ir->id, 'edit']) }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@stop