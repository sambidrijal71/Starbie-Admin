@extends('layouts.app')

@section('content')
    <h1>Edit Branches</h1>
    {!! Form::open(['action'=> ['branchcontroller@update',$branch->bid],'method'=>'POST']) !!}
    
       
        {{-- order id --}}
        <div class = "form-group">
            {{Form::label('oid','Organization Id')}}
            {{Form::text('oid',$branch->oid,['class'=>'form-control','placeholder'=>'Organization Id', 'required'])}}
        </div>
    
        {{-- address id --}}
        <div class = "form-group">
                {{Form::label('addressid','Address Id')}}
                {{Form::text('addressid',$branch->addressid,['class'=>'form-control','placeholder'=>'Address Id'], 'required')}}
            </div>
    
        {{-- postal address id --}}
        <div class = "form-group">
            {{Form::label('postaladdressid','Postal Address Id')}}
            {{Form::text('postaladdressid',$branch->postaladdressid,['class'=>'form-control','placeholder'=>'Postal Address Id', 'required'])}}
        </div>
    
        {{-- post office box --}}
        <div class = "form-group">
                {{Form::label('pobox','Post Office Box')}}
                {{Form::text('pobox',$branch->pobox,['class'=>'form-control','placeholder'=>'Post Office Box', 'required'])}}
        </div>
    
    
        {{--contact number --}}
        <div class = "form-group">
                {{Form::label('contactno','Contact Number')}}
                {{Form::text('contactno',$branch->contactno,['class'=>'form-control','placeholder'=>'Contact Number', 'required'])}}
        </div>
    
        {{-- about --}}
        <div class = "form-group">
                    {{Form::label('about','About Branch')}}
                    {{Form::text('about',$branch->about,['class'=>'form-control','placeholder'=>'About Branch', 'required'])}}
        </div>
    
        {{-- gallery --}}
        <div class = "form-group">
                    {{Form::label('gallery','Gallery')}}
                    {{Form::text('gallery',$branch->gallery,['class'=>'form-control','placeholder'=>'Gallery', 'required'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    
    {!! Form::close() !!}

    
    @endsection