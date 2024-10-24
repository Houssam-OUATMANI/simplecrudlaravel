<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Inscription</h1>

    <form action="{{route("handleRegister")}}" method="post">
        @csrf
        <div>
            <label for="">Nom</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">Mot de passe</label>
            <input type="password" name="password">
        </div>

        <button>Inscription</button>
    </form>
</body>
</html>
