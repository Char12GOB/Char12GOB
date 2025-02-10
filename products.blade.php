<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
</head>
<body>
    <h1>Liste des produits</h1>
    <table>
        <thead>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product["id"]}}</td>
                <td>{{$product["name"]}}</td>
                <td>{{$product["price"]}}</td>
                <td><a href="/products/delete/{{$product["id"]}}">Supprimer</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/products/new">Nouveau Produit</a>
</body>
</html>
