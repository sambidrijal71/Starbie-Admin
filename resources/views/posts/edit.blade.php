@extends('layouts.app')

@section('content')
    <h1>Edit Advertisement</h1>
    {!! Form::open(['action'=> ['PostsController@update',$post->id],'method'=>'POST']) !!}
    <div class = "form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title', 'required'])}}
    </div>
    <div class = "form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text','required'])}}
        </div>
        
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    
    {!! Form::close() !!}

    
    @endsection