@extends('app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/charactersCreate.css')}}" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=MedievalSharp">
    <title>Créer un personnage</title>
</head>
<body>
    
</body>
</html>

@section('content')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="form-center">
<form action="{{route('characters.store')}}" method="POST">

  @csrf
  {{ session('success') }}
  <h2>Créer un nouveau personnage</h2>

    <input placeholder="Nom du personnage" type="text" name="name"></input>
    <input placeholder="Histoire du personnage" type="text" name="description"></input>
    <select name="classe">
      <option value="guerrier">Guerrier</option>
      <option value="mage">Mage</option>
      <option value="druide">Druide</option>
      <option value="assassin">Assassin</option>
      <option value="berseker">Berseker</option>
      <option value="Archer">Archer</option>
  </select>

  <button type="submit">Créer le personnage</button>

</form>
</div>
        @endsection