@extends('layouts.app')
@section('title','Create Organizations');
@section('content')
<h1> Create organizations</h1>
<form action ="/organizations" method = "post">
    @include('organizations.form')
    <button class ="btn btn-primary">Add Organization</button>
   
</form>
@endsection
