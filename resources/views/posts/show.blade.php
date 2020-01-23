@extends('layouts.app')

@section('content')
<a href ="/posts" class = "btn btn-default"> Go back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}<br/>
        {!!$post->logo!!}
    </div>
    <hr>
    <small>Written on {{$post ->created_at}}</small>
    <hr>
    <a href ="/posts/{{$post->id}}/edit" class = "btn btn-default">Edit</a>
    {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'post','class'=>'pull-right'])!!}
        {{Form::hidden('_method','Delete')}}
        {{-- Array of parameter --}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
    @endsection