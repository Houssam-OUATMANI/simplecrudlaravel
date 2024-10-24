<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @if (session("success"))
    <div>{{session("success")}}</div>
@endif


    <h1>Connexion</h1>

    <form action="{{route("handleLogin")}}" method="post">
        @csrf

        <div>
            <label for="">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">Mot de passe</label>
            <input type="password" name="password">
        </div>

        <button>Connexion</button>
    </form>
</body>
</html>
