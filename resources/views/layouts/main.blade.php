<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-14</title>

</head>

<body>
    <div class="container">
        <header>
            <h1>{{ $title }}</h1>

            <li><a href="{{ route('content.first') }}">Первая страница</a></li>
            <li><a href="{{ route('content.second') }}">Вторая страница</a></li>
            <li><a href="{{ route('content.third') }}">Третья страница</a></li>

        </header>

        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

</html>