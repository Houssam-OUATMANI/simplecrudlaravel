<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Ajouter un produit</h1>


    <form action="{{route("product.store")}}" method="post">
        @csrf
        <input type="text" placeholder="title" name="title" value="{{old("title")}}">
        @error("title") <p>{{$message}}</p> @enderror
        <br>
        <input type="number" step="0.01" name="price" value="{{old("price")}}">
        <br>
        <textarea name="description" id="" placeholder="description"> {{old("description")}}</textarea>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
