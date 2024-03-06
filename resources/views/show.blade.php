<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="./app.css">


        <style>

            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased"> 
    <div class="container">
        <h1>{{ $produit->nom }}</h1>
        <p>Description: {{ $produit->description }}</p>
        <p>Prix: {{ $produit->prix }}</p>

        <h2>Commentaires</h2>
        @if(count($commentaires)>0)
        @foreach ($commentaires as $commentaire)
            <div class="commentaire">
                <p>{{ $commentaire->contenu }}</p>
            </div>
        @endforeach
        @else
        <div class="commentaire">
                <p>pas de commentaire</p>
            </div>
            @endif

    </div>
    </body>
</html>
