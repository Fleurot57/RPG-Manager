@extends('app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/login.css')}}" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=MedievalSharp">
    <title>Connexion</title>
</head>
@section('content')
<body>

    <div class="form-center">
        <h2>Connectez-vous à votre compte</h2>
        <form action="{{ route('confirmlogin') }}" method="POST">
            @csrf
          <input placeholder="Nom d'utilisateur" type="text" name="pseudo"></input>
          <input placeholder="Mot de passe" type="password" name="password"></input>
      <button>Connexion</button>
      </form>
      
      </div>
                  

</body>
@endsection
</html>