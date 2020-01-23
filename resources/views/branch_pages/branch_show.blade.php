@extends('layouts.app')

@section('content')

    <h1><b>Branch Id:</b> {{$branch->bid}}</h1>
    <div>
       <h1><b>Branch Description:</b></h1> <h3>{!!$branch->about!!}</h3>
    </div>
    <hr>
    <!-- <small>Written on {{$branch ->created_at}}</small> -->
    <hr>
    {!!Form::open(['action'=>['branchcontroller@destroy',$branch->bid],'method'=>'branch','class'=>'pull-right'])!!}
    <a href ="/branch/{{$branch->bid}}/edit" class = "btn btn-primary">Edit</a>
    
        {{Form::hidden('_method','Delete')}}
        {{-- Array of parameter --}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
        <a href ="/branch" class = "btn btn-secondary"> Go back to branches</a>
    {!!Form::close()!!}
    
    @endsection