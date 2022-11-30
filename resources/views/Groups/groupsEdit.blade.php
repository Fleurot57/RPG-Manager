@extends('app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('CSS/Characters/charactersCreate.css')}}" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=MedievalSharp">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Modifier le groupe</title>
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
<form class="form-center" action="{{ route('groups.update', $group->id) }}" method="POST">

  @csrf
  @method('PUT')
  {{ session('success') }}
  <h2>Modifier le groupe</h2>

    <input placeholder="Nom du groupe" type="text" name="name" value="{{ old('name', $group->name) }}"></input>
    <input placeholder="Description du groupe" type="text" name="description" value="{{ old('description', $group->description) }}"></input>
    <select name="number" value="{{ old('group', $group->number) }}">
      <option value="5">5</option>
      <option value="10">10</option>
      <option value="15">15</option>
      <option value="20">20</option>
      <option value="25">25</option>
      <option value="30">30</option>
  </select>

  <button><a href="{{ route('groups.show', $group->id) }}">Modifier le groupe</a></button>

</form>
</div>
        @endsection