<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @foreach($countries as $country)
    <div>
        <h2>{{ $country->name }}</h2>
        <ul>
            @foreach($country->cities as $city)
            <li>{{ $city->name }}</li>
            @endforeach
        </ul>
    </div>
    @endforeach
</body>

</html>