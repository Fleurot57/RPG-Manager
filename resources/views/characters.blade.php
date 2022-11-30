@if(session()->has('success'))
<div class="alert alert-success">
  <div class="text-center">{{ session()->get('success') }}</div>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


@extends('app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/characters.css')}}" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=MedievalSharp">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Taverne</title>
</head>
@section('content')
<body>       
                <section class="py-5">
                  <div class="container px-4 px-lg-5 mt-5">
                    
                      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @foreach($characters as $key => $character)
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
                          @endforeach
              </section>
</body>
@endsection
</html>