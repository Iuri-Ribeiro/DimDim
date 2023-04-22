<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/app.css">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @yield('content')
</body>

</html>
