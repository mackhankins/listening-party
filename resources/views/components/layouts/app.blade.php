<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Listening Pary' }}</title>
    </head>
    <!-- Styles -->
    <wireui:scripts />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <body>
        {{ $slot }}
    </body>
</html>
