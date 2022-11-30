@if(session()->has('success'))
<div class="alert alert-success">
    <p class="text-center">{{ session()->get('success') }}</p>
</div>
@endif

@extends('app')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('CSS/Login/register.css')}}" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=MedievalSharp">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Inscription</title>
    
</head>
@section('content')
<body>
    <div class="form-center">
        <h2>Inscris-toi facilement et gratuitement.</h2>
        <form action="{{ route('confirmregister') }}" method="POST">
            @csrf
          <input placeholder="Adresse E-mail" type="text" name='email' class="form-control @if($errors->has('email')) is-invalid @endif"/>
          @if($errors->has('email'))
    <div class="invalid-feedback">
        {{ $errors->first('email') }}
    </div>
@endif
          <input placeholder="Nom d'utilisateur" type="text" name='pseudo' class="form-control @if($errors->has('pseudo')) is-invalid @endif"/>
          @if($errors->has('pseudo'))
    <div class="invalid-feedback">
        {{ $errors->first('pseudo') }}
    </div>
@endif
          <input placeholder="Prénom" type="text" name='firstname' class="form-control @if($errors->has('firstname')) is-invalid @endif"/>
          @if($errors->has('firstname'))
    <div class="invalid-feedback">
        {{ $errors->first('firstname') }}
    </div>
@endif
          <input placeholder="Nom" type="text" name='lastname' class="form-control @if($errors->has('lastname')) is-invalid @endif"/>
          @if($errors->has('lastname'))
    <div class="invalid-feedback">
        {{ $errors->first('lastname') }}
    </div>
@endif
          <input placeholder="Mot de passe" type="password" name='password' class="form-control @if($errors->has('password')) is-invalid @endif"/>
          @if($errors->has('password'))
          <div class="invalid-feedback">
              {{ $errors->first('password') }}
          </div>
      @endif

          <button type="submit">Inscription</button>
      </form>
      
      </div>
</body>
@endsection
</html>