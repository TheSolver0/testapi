<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TestApi</title>
</head>
<body>
    <form action="{{route('login')}}" method="POST">
        @method('POST')
        <fieldset>
            <legend>Connexion</legend>
            Email : <input type="email" name="email">
            Mot de passe : <input type="password" name="password">
            <br>
            <br>
            <br>
            <button type="Reset">Reset</button>
            <button type="submit">Se connecter</button>
        </fieldset>
    </form>
</body>
</html>
