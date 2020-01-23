@extends('layouts.app')

@section('content')
    <h1>Create Branch</h1>
    {{-- Post Method to send data to store function of branchController --}}
    {!! Form::open(['action'=> 'branchcontroller@store','method'=>'POST']) !!}


	<!-- <div class = "form-group"> -->
        <!-- {{Form::label('fname','Branch Name')}} -->
        <!-- {{Form::text('fname','',['class'=>'form-control','placeholder'=>'Branch name', 'required'])}} -->
    <!-- </div> -->

    {{-- order id --}}
    <div class = "form-group">
        {{Form::label('oid','Organization Id')}}
        {{Form::text('oid','',['class'=>'form-control','placeholder'=>'Organization Id', 'required'])}}
    </div>

    {{-- address id --}}
    <div class = "form-group">
            {{Form::label('addressid','Address Id')}}
            {{Form::text('addressid','',['class'=>'form-control','placeholder'=>'Address Id', 'required'])}}
        </div>

    <!-- {{-- postal address id --}}
    <div class = "form-group">
        {{Form::label('postaladdressid','Postal Address Id')}}
        {{Form::text('postaladdressid','',['class'=>'form-control','placeholder'=>'Postal Address Id', 'required'])}}
    </div> -->

    {{-- post office box --}}
    <div class = "form-group">
            {{Form::label('pobox','Post Office Box')}}
            {{Form::text('pobox','',['class'=>'form-control','placeholder'=>'Post Office Box', 'required'])}}
    </div>


    {{--contact number --}}
    <div class = "form-group">
            {{Form::label('contactno','Contact Number')}}
            {{Form::text('contactno','',['class'=>'form-control','placeholder'=>'Contact Number', 'required'])}}
    </div>

    {{-- about --}}
    <div class = "form-group">
                {{Form::label('about','About Branch')}}
                {{Form::text('about','',['class'=>'form-control','placeholder'=>'About Branch', 'required'])}}
    </div>

    {{-- gallery --}}
    <div class = "form-group">
                {{Form::label('gallery','Gallery')}}
                {{Form::text('gallery','',['class'=>'form-control','placeholder'=>'Gallery', 'required'])}}
    </div>
    
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close()!!}
    @endsection