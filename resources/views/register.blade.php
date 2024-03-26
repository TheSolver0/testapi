<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TestApi</title>
</head>
<body>
    <form action="{{route('register')}}" method="POST">
        @method('POST')
        <fieldset>
            <legend>Inscription</legend>
            Nom : <input type="text" name="name">
            Email : <input type="email" name="email">
            Mot de passe : <input type="password" name="password">
            Mot de passe(confirmation) : <input type="password" name="password_confirmation">
            <br>
            <br>
            <br>
            <button type="Reset">Reset</button>
            <button type="submit">S'inscire</button>
        </fieldset>
    </form>
</body>
</html>
