<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe 31</title>

    {{-- LINK CUSTOM CSS --}}
    <link rel="stylesheet" href="{{ @asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Homepage</h1>
        <div></div>
        <a class="button" href="{{ route('Students') }}">Gli studenti:</a>
    </div>
</body>
</html>