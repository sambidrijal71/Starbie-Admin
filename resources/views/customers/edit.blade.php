@extends('layouts.app')

@section('content')

<div class="row">
<div class= "col-lg-12 col-sm-12">
<section class="panel panel-primary"> 
 <div class="panel-heading" > 
 <hr>
</h3><b>Edit the Customer</b></h3>
 </div>

<div class="panel-body"> 

{!! Form::model($customers, [
    'method' => 'PATCH',
    'route' => ['customers.update', $customers->cid]
]) !!}


<div class="form-group">
   {!! Form::label('Fist Name')  !!} 
   {!! Form::text('fname', null, ['class'=>'form-control'])  !!} 

</div>

<div class="form-group"> 
   {!! Form::label('Middle Name') !!} 
   {!! Form::text('mnames', null, ['class'=>'form-control'])  !!} 

</div>

<div class="form-group">
   {!! Form::label('Last Name')  !!} 
   {!! Form::text('lname', null, ['class'=>'form-control'])  !!} 

</div>

<div class="form-group">
   {!! Form::label('Date of Birth')  !!} 
   {!! Form::text('dob', null, ['class'=>'form-control'])  !!} 

</div>

<div class="form-group">
   {!! Form::label('Gender')  !!} 
   {!! Form::text('gender', null, ['class'=>'form-control'])  !!} 

</div>

<div class="form-group">
   {!! Form::label('Email Address')  !!} 
   {!! Form::text('email', null, ['class'=>'form-control'] ) !!} 

</div>


    {!! Form::submit('Update Customer', ['class' => 'btn btn-primary']) !!}

    </div>

   {!! Form::close() !!} 

<hr>



@endsection