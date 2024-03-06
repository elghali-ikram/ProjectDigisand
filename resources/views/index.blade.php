<!DOCTYPE html>
<html lang="fr">
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
        <div class="relative flex flex-column bg-danger items-top justify-center min-h-screen bg-gray-100   sm:items-center py-4 sm:pt-0">
    <div class="container">
    <H1>Bienvenue</H1>
        <div class="row mb-3">
            <div class="col">
                <form action="" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Rechercher un produit..." name="q">
                        <button class="btn btn-danger" type="submit">Rechercher</button>
                    </div>
                </form>
            </div>
            <div class="col text-end">
                <a href="{{ route('ADD')}}" class="btn btn-primary">Ajouter un produit</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Description</th>
                            <th scope="col">Prix</th>
                            <th scope="col">commentaires</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($produits as $produit)
                    <tr>
                        <td>{{ $produit->id }}</td>
                        <td>{{ $produit->name }}</td>
                        <td>{{ $produit->description }}</td>
                        <td>{{ $produit->prix }}</td>
                        <td>
                        <form action="{{ route('produits.show', ['id' => $produit->id])}}" method="GET">
                    <div class="input-group">
                        <button class="btn btn-danger" type="submit">Afficher</button>
                    </div>
                </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        </div>
    </body>
</html>
