@extends('app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/register.css')}}" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=MedievalSharp">
    <title>Inscription</title>
</head>
@section('content')
<body>

    <div class="form-center">
        <h2>Inscris-toi facilement et gratuitement.</h2>
        <form action="{{ route('confirmregister') }}" method="POST">
            @csrf
          <input placeholder="Adresse E-mail" type="text" name='email'></input>
          <input placeholder="Nom d'utilisateur" type="text" name='pseudo'></input>
          <input placeholder="Prénom" type="text" name='firstname'></input>
          <input placeholder="Nom" type="text" name='lastname'></input>
          <input placeholder="Mot de passe" type="password" name='password'></input>
      <button type="submit">Inscription</button>
      </form>
      </div>
</body>
@endsection
</html>