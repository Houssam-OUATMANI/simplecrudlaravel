<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Editer un produit</h1>


    <form action="{{route("product.update", ["product" => $product])}}" method="post">
        @csrf
        @method("put")
        <input type="text" placeholder="title" name="title" value="{{$product->title}}">
        @error("title") <p>{{$message}}</p> @enderror
        <br>
        <input type="number" step="0.01" name="price" value="{{$product->price}}">
        <br>
        <textarea name="description" id="" placeholder="description"> {{$product->description}}</textarea>

        <button type="submit">Mettre á jour</button>
    </form>
</body>
</html>
