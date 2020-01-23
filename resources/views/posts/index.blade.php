@extends('layouts.app')

@section('content')
    <h1>Advertisement</h1>
    @if (count($posts)>0)
        @foreach ($posts as $posts)
            <div class = "well">
            <h3><a href ="/posts/{{$posts->id}}">{{$posts->title}}</a></h3>
                <small> written on {{$posts->created_at}}</small>
            </div>
        @endforeach
      {{-- {{ $posts->links() }} --}}
    @else
        no posts found
    @endif


@endsection