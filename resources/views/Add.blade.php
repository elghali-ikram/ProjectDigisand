<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body>
    <div class="container">
        <h1>Créer un Produit</h1>
        <form method="POST" action="{{ route('produits.store')}}">
    @csrf
            <div class="form-group">
                <label for="nom">Nom:</label>
                </div>

                <input type="text" class="form-control" id="nom" name="nom" required>
            <div class="form-group">
                <label for="description">Description:</label>
                </div>

                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            <div class="form-group">
                <label for="prix">Prix:</label>
                </div>

                <input type="number" class="form-control" id="prix" name="prix" step="0.01" required>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</body>
</html>
