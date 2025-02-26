<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite([
            "resources/css/app.css",
            "resources/js/app.js"
        ])
        <title>{{ $title ?? 'گفتگو' }}</title>
    </head>
    <body class=" font-vasir">
        {{ $slot }}
    </body>
</html>
