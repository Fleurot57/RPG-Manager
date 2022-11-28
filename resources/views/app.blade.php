<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=MedievalSharp">
    <script src="https://kit.fontawesome.com/80710740bc.js" crossorigin="anonymous"></script>
</head>

    <header>

        <ul class="btn-container">

            <a href="{{ url('characters') }}"><li class="btn-navbar">Taverne</li></a>
            @auth
            <a href="{{ url('characters/create') }}"><li class="btn-navbar">Mes personnages</li></a>
            <div class="btn-auth">
                <div class="text-auth">Bonjour avanturier {{Auth::user()->pseudo}}</div>
            <a href="{{ url('logout') }}"><li class="btn-logout"><i class="fa-solid fa-right-from-bracket"></i></li></a>
            <div>
            @else
            <div class="btn-auth">
                <a href="{{ url('login') }}"><li class="btn-navbar">SE CONNECTER</li></a>
                <a href="{{ url('register') }}"><li class="btn-navbar">S'INSCRIRE</li></a>
            <div>
            @endauth

        </ul>

    <header>

    @yield('content')

</html>
