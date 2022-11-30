@extends('app')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('CSS/Characters/charactersShow.css')}}" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=MedievalSharp">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Détails du personnage</title>
</head>

@section('content')
<body>

        <div class="container py-5">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
              <div class="card text-black">
                <img src="https://cdn-icons-png.flaticon.com/512/3819/3819263.png"
                  class="card-img-top w-50 mx-auto"/>
                <div class="card-body">
                  <div class="card-body pb-0">
                    <div class="d-flex justify-content-between">
                      <div>
                        <p class="text-dark">{{$character->name}}</p>
                      </div>
                        <div>
                          <p class="justify-content-end small text-muted">{{$character->classe}}</p>
                        </div>
                    </div>
                  </div>
                  <hr class="my-2" />
                  <div>
                    <div class="text-center">
                      {{-- <h5 class="card-title"></h5> --}}
                      <p class="text-muted mb-4">{{$character->description}}</p>
                    </div>
                    <hr class="my-2" />
                    <div class="d-flex justify-content-between">
                      <span>Vie</span><span>{{$character->pv}}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                      <span>Magie</span><span>{{$character->magie}}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Force</span><span>{{$character->force}}</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <span>Agilité</span><span>{{$character->agility}}</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <span>intelligence</span><span>{{$character->intelligence}}</span>
                      </div>
                  </div>

                  <hr class="my-2" />

                  @auth
                  @if(auth()->user()->id == $character->user_id)
                  <div class="d-flex justify-content-between total font-weight-bold mt-4">
                    <button><a href="{{ route('characters.edit', $character->id) }}">Modifier</a></button>

                    <form method="post" action="{{ route('characters.destroy', $character->id) }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit">Supprimer</button>
                    </form>
                    
                    <form method="POST" action="{{ route('levelup') }}"> 
                      @csrf
                      
                      <button type="submit">Level UP</a></button>
                    @endif
                    @endauth
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

</body>
@endsection
</html>