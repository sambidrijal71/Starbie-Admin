
@extends('layouts.app')
@section('content')

<hr>

<div class="row">
<div class="col-lg-12 col-sm-12">
<section class="panel panel-primary">
 <div class="panel-heading">
 <b><h1>Customers Data</h1></b>
 </div>
 <div class="panel-body">
 <table class="table table-hover">
 <thead>
 <th> First Name </th>
 <th> Middle Name</th>
 <th> Last Name </th>
 <th> Date of Birth </th>
 <th> Gender</th>
 <th> Email </th>
 

 </thead>
<tbody>
@foreach($customers as $customer)
<tr>
    <td>{{ $customer->fname }}</td>            
    <td>{{ $customer->mnames }}</td>
    <td>{{ $customer->lname }}</td>            
    <td>{{ $customer->dob }}</td>
    <td>{{ $customer->gender }}</td>            
    <td>{{ $customer->email }}</td>
          

    <td> <p><a href="{{ route('customers.show', $customer->cid) }}" class="btn btn-info">View customer</a>
        <a href="{{ route('customers.edit', $customer->cid) }}" class="btn btn-primary">Edit </a>
    </p></td> 
    </tr> 
@endforeach

</tbody>
</table>
</div>
</section>
</div>
</div>


@endsection