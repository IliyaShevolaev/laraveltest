<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список пользователей</title>
    <style>
        .banned {
            color: red;
        }

        .active {
            color: green;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>№</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Статус</th>
        </tr>
        @foreach($users as $index => $user)
        <tr class="{{ $user['banned'] ? 'banned' : 'active' }}">
            <td>{{ $index + 1 }}</td>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['surname'] }}</td>
            <td>{{ $user['banned'] ? 'забанен' : 'активен' }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>