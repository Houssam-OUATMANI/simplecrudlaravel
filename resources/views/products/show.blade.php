<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Detail pour le produit {{$product->title}}</h1>


    <p>{{$product->description}}</p>
    <p>{{$product->user->name}}</p>

</body>
</html>
