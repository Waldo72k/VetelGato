<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Login</title>

<!--

Breezed Template

https://templatemo.com/tm-543-breezed

-->
    <!-- Additional CSS Files -->
    @vite(['./resources/js/app.js', 'resources/css/app.scss'])

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">


    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('css/templatemo-breezed.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">

</head>
    
<body>


<div class="container">
    <div class="row" style="margin-top:45px"> <div class="col-md-4 col-md-offset-4"> <h4>Login | Custom Auth</h4><hr> 
        <form action="{{route('auth.check')}}" method="post">
            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
            @endif

            @csrf 
            <div class="form-group"> 
        <label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="Ingrese email" value="{{old('email')}}">
        <span class="text-danger">@error('email'){{ $message }} @enderror</span> 
    </div>
    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" class="form-control" name="password" placeholder="Ingrese contraseña">
        <span class="text-danger">@error('password'){{ $message }} @enderror</span> 
    </div>
    <button type="submit" class="btn btn-block btn-primary">Sign In</button>
    <br>
    <a href="{{route('auth.register')}}">No tengo cuenta, crear una</a> <br>
    <a href="{{route('index')}}">Volver a la pagina principal</a> 
        </form>
    </div>
</div>

</body>
</html>