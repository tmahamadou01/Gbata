<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation</title>
</head>
<body>

    <h1>Merci d'avoir crée un compte GBATA</h1>

    <p>
        Pour continuer votre navigation sur GBATA veuillez confirmer votre compte <a href="{{ url("register/confirm/{$user->token}") }}">ICI</a>
    </p>
</body>
</html>