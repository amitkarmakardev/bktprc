@extends('layout.layout')

@section('subcontent')
    <div class="content">
        <h4>All members</h4>
        <hr>
        <table class="table table-hover">
        <thead>
           <tr>
               <th>Member ID</th>
               <th>Member Type</th>
               <th>Name</th>
               <th>Associated To</th>
               <th>Relation</th>
               <th>Edit</th>
           </tr>
        </thead>
        <tbody>
            @foreach($member_list as $member)
                <tr>
                    <td>{{ $member->member_id}}</td>
                    <td>{{ $member->type }}</td>
                    <td>{{ $member->name }}</td>
                    <td>
                    @if($member->associatedTo)
                        {{ $member->associatedTo->name }}
                    @endif
                    </td>
                    <td>{{ $member->relation }}</td>
                    <td><a href="{{ url('member', [$member->id, 'edit']) }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@stop