@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-lg-12 col-sm-12">
<section class="panel panel-primary">
<hr>
 <div class="panel-heading">
 <h3>Customer Details</h3>
 </div>
 <div class="panel-body">
 <table class="table table-hover">
 <thead>
 <th> Customer ID</th>
 <th> First Name</th>
 <th> Middle Name </th>
 <th> Last Name </th>
 </thead>
<tbody>
<tr>
    <td>{{ $customers->cid }}</td>            
    <td>{{ $customers->fname }}</td>
    <td> {{ $customers->mnames }}</td>
    <td> {{ $customers->lname }}</td>
    </tr>
    </tbody>
    <thead>
 <th> Date of Birth</th>
 <th> Gender</th>
 <th> Email</th>
 </thead>
<tbody>
<tr>
    <td>{{ $customers->dob }}</td>            
    <td>{{ $customers->gender }}</td>
    <td> {{ $customers->email }}</td>
    </tr>
    </tbody>
    <thead>
</table>
</div>
</section>
</div>
</div>

<div class="row">
<div class="col-md-6"> 
<a href="{{ route('customers.index') }}" class="btn btn-info">Back to all Customers</a>
<a href="{{ route('customers.edit', $customers->cid) }}" class="btn btn-primary">Edit This Customer</a>
</div>


<div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['customers.destroy', $customers->cid]
        ]) !!}
            {!! Form::submit('Delete this Customer', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>


<hr>



@endsection