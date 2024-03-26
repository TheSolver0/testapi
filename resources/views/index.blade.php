<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>TestApi</title>
</head>
<body>
    <div class="entete">
        <h1 style="text-align: center;">
            Listes des articles
        </h1>
        <a href="{{route('create')}}"><button> Ecrire un article ?</button></a>
    </div>

    <div class="container">
        @forelse ($articles as $article )
        <div class="card">
            <img src="{{asset('images/i.jpg')}}" alt="">
            <p>
                <b>Nom : {{$article->name}}</b>
                <span>Date de publication : {{$article->created_at}}</span>
                <b><i>Auteur : {{$article->auteur}}</i></b>
            </p>
        </div>
        @empty
            <span style="color:brown;">Aucun article disponibles</span>
        @endforelse
        {{-- <div class="card">
            <img src="{{asset('images/i.jpg')}}" alt="">
            <p>
                <b>Article de livre</b>
                <span>10/03/2024 a 20h</span>
                <b><i>Luc FOTSO</i></b>
            </p>
        </div> --}}
    </div>
</body>
</html>
