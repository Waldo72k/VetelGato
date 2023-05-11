<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Register</title>

<!--

Breezed Template

https://templatemo.com/tm-543-breezed

-->
    <!-- Additional CSS Files -->
    @vite(['./resources/js/app.js', 'resources/css/app.scss'])
    

    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('css/templatemo-breezed.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">

</head>
    
<body>


<div class="container">
    <div class="row" style="margin-top:45px"> <div class="col-md-4 col-md-offset-4"> <h4>Registro | Custom Auth</h4><hr> 
        <form action="{{route('auth.save')}}" method="post"> 

            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif

            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
            @endif

            @csrf
            <div class="form-group"> 
                <label>Nombre</label>
                <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{old('name')}}"> 
            </div>
            <span class="text-danger">@error('name'){{ $message }} @enderror </span>
            <div class="form-group"> 
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{old('email')}}"> 
            </div>
            <span class="text-danger">@error('email'){{ $message }} @enderror </span>
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password"> 
            </div>
            <span class="text-danger">@error('password'){{ $message }} @enderror </span>
            <button type="submit" class="btn btn-block btn-primary">Sign In</button>
            <br>
            <a href="{{route('auth.login')}}">Ya tengo cuenta, iniciar seseion</a>  <br>
            <a href="{{route('index')}}">Volver a la pagina principal</a> 
        </form>
    </div>
</div>

</body>
</html>