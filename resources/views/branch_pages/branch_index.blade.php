@extends('layouts.app')

@section('content')
<h1>Branches</h1>
<br>
<h3> Description about Branches</h3>
@if (count($branch)>0)
<table class = "table">
        <thead>
                <tr>
                <th>S.N.</th>
                <th>Organization Id</th>
                <th>Address Id</th>
                <th>Post Office Box</th>
                <th>Contact Number</th>
                {{-- <th colspan="2" style="align:center" >Operations</th>                 --}}
                </tr>
            </thead>
    @foreach ($branch as $branch)
            <tbody>
            <tr>
            <td> <h3>{{$branch->bid}}</h3></td>
            <td> <h3 ><a href ="/branch/{{$branch->bid}}" >{{$branch->oid}}</a></h3></td>
                        <td> <h3 >{{$branch->addressid}}</h3></td>
            <td> <h3>{{$branch->pobox}}</h3></td>
			<td> <h3>{{$branch->contactno}}</h3></td>
                        </tr>
                       
        </tbody>
        @endforeach
    </table>
           
    
    @else
    No branch found 
@endif


@endsection