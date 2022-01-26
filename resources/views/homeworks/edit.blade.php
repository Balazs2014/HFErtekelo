<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit feladat</h1>
    <form method='POST' action="{{ route('homeworks.update', $homework->id) }}">
        @method('PATCH')
        @csrf
        <div>
            Jegy:<br>
            <input type="number" name="grade" value="{{ $homework->grade }}">
        </div>
        <div>
            Szöveges értékelés:<br>
            <input type="text" name="message" value="{{ $homework->message }}">
        </div>
        <div>
            <button type="submit">Kész</button>
            <a href="{{ route('homeworks.index') }}" >
                <button type="button">Vissza</button>
            </a>
        </div>
    </form>
</body>
</html>
