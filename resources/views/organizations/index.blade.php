@extends('layouts.app')
@section('title','List of ')

@section('content')
<h1> Branch Lists</h1>
<table class="table table-light">
    <tbody>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Contact no</td>
            <td>headquarter</td>    
        </tr>
        @foreach ($organizations as $orgList)
        <tr>
        
            <td>{{$orgList->oid}}</td>
            <td><a href = "/organizations/{{$orgList->oid}}">{{$orgList->name}}</td></a>
            <td>{{$orgList->contactno1}}</td>
            <td>{{$orgList->headquarter}}</td>
        </tr>
        @endforeach
    </tbody>
@endsection
