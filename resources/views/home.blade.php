<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Homepage</title>
    </head>
    <body>
        <h1>Hello {{ $name }}</h1>
        <nav>
            <ul>
                @foreach (array("contacts","about","services","terms") as $page)
                <li><a href="{{ route($page) }}">{{ $page }}</a></li>
                @endforeach
            </ul>
        </nav>
    </body>
</html>
