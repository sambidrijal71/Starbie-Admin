@extends('layouts.app')

@section('content')
    <h1>Create Advertisement</h1>
    {!! Form::open(['action'=> 'PostsController@store','method'=>'POST','enctype'=>"multipart/form-data"]) !!}
    <div class = "form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title', 'required'])}}
    </div>
    <div class = "form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text','required'])}}
    </div>
    <div class="input-group">
                  <!-- {!! Form::label('logo', 'Choose Logo') !!}
                  {!! Form::file('image', null) !!} -->
                  <div class ="custom-file">
                     <input type="file" name="logo" class="custom-file-input">
                     <label class ="custom-file-label">Browse file</label>
                  </div>
    </div>
            
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close()!!}
    @endsection