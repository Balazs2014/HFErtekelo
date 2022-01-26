<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giggány</title>
</head>
<body>
    <h1>Házifeladat ellenőrző</h1>
    <p>Beadott házifeladatok száma: {{ $homeworkCount }}</p>
    <p>
        <a href="{{ route('homeworks.index') }}">Feladatok</a>
    </p>
</body>
</html>
