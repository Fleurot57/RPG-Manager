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

{{ session('success') }}

<form class="form-center" action="{{route('characters.store')}}" method="POST">

  @csrf
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
@foreach($characters as $key => $character)
@if(auth()->user()->id == $character->user_id)
<section class="section-characters py-5">
    <div class="container px-4 px-lg-5 mt-5">
      
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          <div class="col mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">{{$character['name']}}</h5>
                            <span>{{$character['classe']}}</span>
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('characters.show', $character->id) }}">Détails</a></div>
                      </div>
                </div>
            </div>
</section>
@endif
@endforeach


        @endsection