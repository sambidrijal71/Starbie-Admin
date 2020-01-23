@extends('layouts.app')

@section('content')
<h1>Administrator</h1>
<br>
<h3> Description about adminstrator</h3>
@if (count($admin)>0)
<table class = "table">
        <thead>
                <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>Employee level</th>
                <th>Created at</th>
                <th colspan="2" style="align:center" >Job Position</th>
                </tr>
            </thead>
    @foreach ($admin as $admin)
            <tbody>
            <tr>
            <td> <h3>{{$admin->aid}}</h3></td>
            <td> <h3><a href ="/admin/{{$admin->aid}}">{{$admin->fname}}</a></h3></td>
                        <td> <h3>{{$admin->jobposition}}</h3></td>
            <td> {{$admin->created_at}}</td></small>
            <td><h3>{{$admin -> jobposition}}</h3></td>
                        </tr>
                        
        </tbody>
        @endforeach
    </table>
           -
    
    @else
    No admin found 
@endif


@endsection