<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau Produit</title>
</head>
<body>
    <form action="/products/save" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nom du produit">
        <br>
        <input type="number" name="price" placeholder="Le prix du produit">
        <br>
        <input type="submit">
    </form>
</body>
</html>