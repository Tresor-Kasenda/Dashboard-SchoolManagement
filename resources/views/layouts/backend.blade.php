<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="{{ csrf_token() }}" name="csrf-token">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    @vite(['resources/css/backend/backend.css', 'resources/js/backend/backend.js'])
</head>
<body>
<div id="app">
    {{ $slot }}
</div>
</body>
</html>
