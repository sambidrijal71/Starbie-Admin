@extends ('layouts.app')

@section('content')
    <div class = "jumbotron text-center">
<h1> {{$title}}</h1>
<P> <b><h4>This is the inventory management system developed from laravel. In order to use the system, please Log In.</h4></b> </P>
<p>
    <a class = "btn btn-primary btn-lg" href = "/login" role = "button">Login</a>
    <!-- <a class = "btn btn-primary btn-lg" href = "/register" role = "button">Register</a></p> -->
    </div>
@endsection
        
