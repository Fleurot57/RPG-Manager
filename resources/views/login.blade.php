@if(session()->has('alert'))
<div class="alert alert-danger">
    <p class="text-center">{{ session()->get('alert') }}</p>
</div>
@endif

@extends('app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/login.css')}}" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=MedievalSharp">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Connexion</title>
    
</head>
@section('content')
<body>

    <div class="form-center">
        <h2>Connectez-vous à votre compte</h2>
        <form action="{{ route('confirmlogin') }}" method="POST">
            @csrf
          <input placeholder="Nom d'utilisateur" type="text" name="pseudo" class="form-control @if($errors->has('pseudo')) is-invalid @endif"/>
          @if($errors->has('pseudo'))
              <div class="invalid-feedback">
                  {{ $errors->first('pseudo') }}
              </div>
          @endif
          <input placeholder="Mot de passe" type="password" name="password" class="form-control @if($errors->has('password')) is-invalid @endif"/>
          @if($errors->has('password'))
          <div class="invalid-feedback">
              {{ $errors->first('password') }}
          </div>
      @endif
      <button>Connexion</button>
      </form>
      
      </div>
                  

</body>
@endsection
</html>