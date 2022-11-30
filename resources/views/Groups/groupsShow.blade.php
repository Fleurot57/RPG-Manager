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
    <title>Détails du groupes</title>
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
                        <p class="text-dark">{{$group->name}}</p>
                      </div>
                        <div>
                          <p class="justify-content-end small text-muted">{{$group->number}}</p>
                        </div>
                    </div>
                  </div>
                  <hr class="my-2" />
                    <div class="text-center">
                      {{-- <h5 class="card-title"></h5> --}}
                      <p class="text-muted mb-4">{{$group->description}}</p>
                    </div>
                    <hr class="my-2" />

                  @auth
                  @if(auth()->user()->id == $group->user_id)
                  <div class="d-flex justify-content-between total font-weight-bold mt-4">
                    <button><a href="{{ route('groups.edit', $group->id) }}">Modifier</a></button>

                    <form method="post" action="{{ route('groups.destroy', $group->id) }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit">Supprimer</button>
                      @endif
                    @endauth

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

</body>
@endsection
</html>