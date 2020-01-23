@extends('layouts.app')
@section('title')
    Edit Organizations
@endsection
@section('content')
    <div class = "col-12">
        <h1>{{$organizations->name}}</h1>
    </div> 
    <div class="row">
        <div class="col-12">
            <form action = "/organizations/{{$organizations->oid}}" method="POST">
                @method('PATCH')
                @include('organizations.form')
                <button class = "btn btn-primary">Save organization</button>
            </form>
        </div>
    </div>
@endsection