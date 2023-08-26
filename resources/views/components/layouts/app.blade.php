<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('build/assets/app-28b7bbfc.css') }}">
        <link rel="stylesheet" href="{{ asset('css/login-register.css') }}">
        @vite('resources/css/app.css')

        <title>{{  $title ?? ''  }} | Passwizard</title>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
