<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vue 3 / Laravel 10 / Vite</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="app"></div>
</body>

</html>