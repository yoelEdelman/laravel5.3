<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        {!! Html::style('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') !!}
        <style> textarea { resize: none; } </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>