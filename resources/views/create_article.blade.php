<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TestApi</title>
</head>
<body>
    <form action="{{route('articlestore')}}" method="POST">
        @method('POST')
        <fieldset>
            <legend>Creation Article</legend>
            Nom : <input type="text">
            <br>
            <br>
            <br>
            <button type="Reset">Reset</button>
            <button type="submit">S'inscire</button>
        </fieldset>
    </form>
</body>
</html>
