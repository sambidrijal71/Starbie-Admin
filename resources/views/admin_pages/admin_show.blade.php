@extends('layouts.app')

@section('content')
<a href ="/admin" class = "btn btn-default"> Go back</a>
    <h1>{{$admin->fname}}</h1>
    <div>
        {!!$admin->mname!!}
    </div>
    <div>
            {!!$admin->lname!!}
        </div>
        <div>
                {!!$admin->gender!!}
            </div>
            <div>
                    {!!$admin->nationality!!}
                </div>
                <div>
                        {!!$admin->lname!!}
                    </div>

    <hr>
    <small>Written on {{$admin ->created_at}}</small>
    <hr>
    {!!Form::open(['action'=>['adminController@destroy',$admin->aid],'method'=>'admin','class'=>'pull-right'])!!}
    <a href ="/admin/{{$admin->aid}}/edit" class = "btn btn-default">Edit</a>
   
        {{Form::hidden('_method','Delete')}}
        {{-- Array of parameter --}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
    @endsection