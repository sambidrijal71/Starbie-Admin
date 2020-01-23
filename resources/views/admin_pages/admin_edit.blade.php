@extends('layouts.app')

@section('content')
    <h1>Edit admins</h1>


    {!! Form::open(['action'=> ['adminController@update',$admin->aid],'method'=>'patch']) !!}
    {{-- first name --}}
    <div class = "form-group">
        {{Form::label('fname','First Name')}}
        {{Form::text('fname',$admin->fname,['class'=>'form-control','placeholder'=>'First name', 'required'])}}
    </div>
        
    <div class = "form-group">
            {{Form::label('fname','First name')}}
            {{Form::text('fname',$admin->fname,['class'=>'form-control','placeholder'=>'First name', 'required'])}}
        </div>
    
        {{-- middle name --}}
        <div class = "form-group">
                {{Form::label('mname','Middle name')}}
                {{Form::text('mname',$admin->mname,['class'=>'form-control','placeholder'=>'Middle name'])}}
            </div>
    
        {{-- last name --}}
        <div class = "form-group">
            {{Form::label('lname','Last name')}}
            {{Form::text('lname',$admin->lname,['class'=>'form-control','placeholder'=>'Last name', 'required'])}}
        </div>
    
        {{-- Date of birth insert calender --}}
        <div class = "form-group">
                {{Form::label('Dob','Date Of Birth')}}
                {{-- {{Form::date(('Date of Birth'['class'=>'form-control','placeholder'=>'Date of Birth', 'required']))}} --}}
                {{Form::date('name', \Carbon\Carbon::now()),['class'=>'form-control','placeholder'=>'Last name', 'required'] }}
        </div>
    
            
        {{-- Gender  use radio buttons--}}
        
        {{-- nationality --}}
        <div class = "form-group">
                {{Form::label('nationality','Nationality')}}
                {{Form::text('nationality',$admin->nationality,['class'=>'form-control','placeholder'=>'nationality', 'required'])}}
        </div>
    
        {{--Profile pic --}}
        <div class = "form-group">
                {{Form::label('proflepicture','Profile pic')}}
                {{Form::text('profilepicture',$admin->profilepic,['class'=>'form-control','placeholder'=>'Picture', 'required'])}}
        </div>
    
        {{-- job position --}}
        <div class = "form-group">
                    {{Form::label('jobposition','Job Position')}}
                    {{Form::text('jobposition',$admin->jobposition,['class'=>'form-control','placeholder'=>'job position', 'required'])}}
        </div>
    
        {{-- email --}}
        <div class = "form-group">
                    {{Form::label('email','Email')}}
                    {{Form::text('email',$admin->email,['class'=>'form-control','placeholder'=>'Email', 'required'])}}
        </div>
        {{-- password --}}
        <div class = "form-group">
                {{Form::label('password','Password')}}
                {{Form::text('password',$admin->password,['class'=>'form-control','placeholder'=>'Password', 'required'])}}
        </div>
    
        {{-- Postal address --}}
        <div class = "form-group">
                {{Form::label('postaladdress','Postal Address')}}
                {{Form::text('postaladdress','',['class'=>'form-control','placeholder'=>'Postal Address', 'required'])}}
        </div>  
    
        {{-- address --}}
        <div class = "form-group">
                {{Form::label('address','Address')}}
                {{Form::text('address',$admin->address,['class'=>'form-control','placeholder'=>'Address', 'required'])}}
        </div> 
    
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update',['class'=>'btn btn-primary'])}}
        {!! Form::close()!!}

    
    @endsection