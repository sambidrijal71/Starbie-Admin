@extends('layouts.app')
@section('title')
    Show Organizations
@endsection

@section('content')
<h3> Information about Organizations</h3>
    <form action = "/organizations/{{$organizations->oid}}/edit">
        <button class = "btn btn-primary">Edit</button>
    </form>
    <form action = "/organizations/{{$organizations->oid}}" method = "POST">
        @method('delete')
        @csrf
        <button value="delete" class="btn btn-danger">Delete</button>
    </form>
    <br/>
<p><strong>ID:</strong>{{$organizations->oid}}</p>
<p><strong>Name:</strong>{{$organizations->name}}</p>
<p><strong>Mobile No:</strong>{{$organizations->contactno1}}</p>
<p><strong>Phone No:</strong>{{$organizations->contactno2}}</p>
<p><strong>Headquarter:</strong>{{$organizations->headquarter}}</p>
<p><strong>About:</strong>{{$organizations->about}}</p>
@endsection