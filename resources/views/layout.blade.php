<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield("title")</title>
</head>
<body>


    <nav>
        @guest
        <a href="{{route("login")}}">Connexion</a>
        <a href="{{route("register")}}">Inscription</a>
        @endguest

        @auth
        <form action="{{route("logout")}}" method="post">
            @csrf
            @method("delete")
            <button>Deconnexion</button>
        </form>
        @endauth

    </nav>
    @yield("content")
</body>
</html>
