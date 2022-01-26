<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $homework->name }}</title>
</head>
<body>
    <h1>Név: {{ $homework->name }}</h1>
    <p>URL: {{ $homework->url }}</p>
    <a href="{{ route('homeworks.index') }}" >
        <button type="button">Vissza</button>
    </a>
</body>
</html>
