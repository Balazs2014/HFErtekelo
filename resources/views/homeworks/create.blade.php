<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Feladat beadása</h1>


    <form method='POST' action="{{ route('homeworks.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Név:<br>
            <input type="text" name="name" value="{{ old('name') }}">
        </div>
        <div>
            URL:<br>
            <input type="text" name="url" value="{{ old('url') }}">
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
        <div>
    </form>
</body>
</html>
