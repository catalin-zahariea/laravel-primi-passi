<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>

    {{-- LINK CUSTOM CSS --}}
    <link rel="stylesheet" href="{{ @asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="flex">
            <h1>Students:</h1>
            <a class="button" href="{{ route('Home') }}">Go back</a>
        </div>
        
        @foreach ($students as $student)
            <div class="item">{{ $student }}</div>
        @endforeach

        
    </div>
</body>
</html>