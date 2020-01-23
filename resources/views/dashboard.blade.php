@extends('layouts.app')

@section('content')



<div class="d-flex" id="wrapper">
<h1>{{ $org->name }}</h1>
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-success"> 
        <img src="public/logos/logo.png">  Dashboard</a>
        <a href="/categories/" class="list-group-item list-group-item-action bg-light">Categories</a>
        <a href="/admin" class="list-group-item list-group-item-action bg-light">Administrator</a>
        <a href="/organizations/create" class="list-group-item list-group-item-action bg-light">Create Organisation</a>
        <a href="/branch/" class="list-group-item list-group-item-action bg-light">Branches</a>
        <a href="/inventories/" class="list-group-item list-group-item-action bg-light">Inventories</a>
        <a href="/transactions/" class="list-group-item list-group-item-action bg-light">Transactions</a>
        <a href="/sales/" class="list-group-item list-group-item-action bg-light">Sales</a>
        <a href="/customers/" class="list-group-item list-group-item-action bg-light">Customers</a> 
        <a href="/offers/" class="list-group-item list-group-item-action bg-light">Offers</a>          
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <div class="container-fluid">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

<div class="table-responsive">
<table class ="table">
<tr>
<td>
<!-- <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups"> -->
  <div class="btn-group btn-group-lg mr-2" role="group" aria-label="First group">
   <a href="/posts" class="btn btn-secondary"> Categories </a>
   </div> </td>

  <td><div class="btn-group btn-group-lg mr-2" role="group" aria-label="Second group">
   <a href="/admin" class="btn btn-secondary"> Administrators </a>
  </div></td>
  <td><div class="btn-group btn-group-lg mr-2" role="group" aria-label="Third group">
    <a href="/organizations/" class="btn btn-secondary">View Organizations </a>
  </div></td>
<!-- </div></br> -->
</tr>
<tr><td>
<!-- <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups"> -->
  <div class="btn-group btn-group-lg mr-2" role="group" aria-label="First group">
  <a href="/branch" class="btn btn-secondary"> Branches </a>
   </div></td>
<td>
  <div class="btn-group btn-group-lg mr-2" role="group" aria-label="Second group">
 <a href="/inventories/" class="btn btn-secondary"> Inventories </a> 
  </div></td>
  <td><div class="btn-group btn-group-lg mr-2" role="group" aria-label="Third group">
    <a href="/transactions/" class="btn btn-secondary"> Transactions </a>
  </div></td></tr>
<!-- </div></br> -->
 <tr>
 <!-- <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups"> -->
<td>  <div class="btn-group btn-group-lg mr-2" role="group" aria-label="First group">
   <a href="/sales/" class="btn btn-secondary"> Sales </a>
   </div></td>
<td>
  <div class="btn-group btn-group-lg mr-2" role="group" aria-label="Second group">
    <a href="/customers/" class="btn btn-secondary"> Customers </a>
  </div></td>
  <td><div class="btn-group btn-group-lg mr-2" role="group" aria-label="Third group">
    <a href="/offers/" class="btn btn-secondary"> Offers </a>
  </div></td></tr>
<!-- </div></br> -->
</table>  
</div>
 
 

      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>

  @endsection