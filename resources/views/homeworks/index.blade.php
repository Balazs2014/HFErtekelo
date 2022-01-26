<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Házifeladatok</title>
</head>
<body>
    <p><a href="{{ route('home') }}">Vissza a főoldalra</a></p>

    <table>
        <tr>
            <th>Name</th>
            <th>Url</th>
            <th>Grade</th>
            <th>Message</th>
        </tr>
    @foreach ($homeworks as $homework)
        <tr>
            <td>
                <a href="{{ route('homeworks.show', $homework->id) }}">{{ $homework->name }}</a>
            </td>
            <td>
                {{ $homework->url }}
            </td>
            <td>
                {{ $homework->grade }}
            </td>
            <td>
                {{ $homework->message }}
            </td>
            <td>
                <form method="POST" action="{{ route('homeworks.destroy', $homework->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Törlés</button>
                </form>
            </td>
            <td>
                <form action="{{ route('homeworks.edit', $homework->id) }}">
                    <button type="submit" method="POST">Értékelés</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    <a href="{{ route('homeworks.create') }}">
        <button type="submit">Beadás</button>
    </a>
</body>
</html>
