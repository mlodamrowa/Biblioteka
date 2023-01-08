<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Panel użytkownika </title>

    <link rel="stylesheet" href="{{asset('css/style2.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/fontello.css')}}" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Tai+Heritage+Pro&display=swap"  rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="{{asset('images/icon/logo.png')}}" type="image/x-icon">
</head>
<body>
<div id="container">
    <div id="header">
        <div class="header-element">
            <a href="{{route('index')}}"><img id="logo1" src="{{asset('images/icon/logo.png')}}" alt="logo"></a>
        </div>

        <div class="header-element">
            <span>Witaj {{Auth::user()->name}}</span>
        </div>

        <div class="header-element">
            <a class="logout" href="{{ url('/logout') }}">Wyloguj się</a>
        </div>
    </div>

    <div id="content">
        <div class="menu-element">
            <i class="icon-warehouse"></i>
            <span><a class="uri-none" href="{{route('index')}}">Powrót</a></span>
        </div>
        <div class="menu-element">
            <i class="icon-folder"></i>
            <span><a class="uri-none" href="{{ route('books')  }}">Baza książek</a></span>
        </div>
        <div class="menu-element">
            <i class="icon-thumbs-up"></i>
            <span>Polecana ksiązka</span>
        </div>
        <div class="menu-element">
            <i class="icon-star"></i>
            <span>Ulubione</span>
        </div>
        <div class="menu-element">
            <i class="icon-book"></i>
            <span>Kategorie</span>
        </div>
        <div class="menu-element">
            <i class="icon-user-1"></i>
            <span>Twoje dane</span>
        </div>
    </div>
</div>
</body>
</html>