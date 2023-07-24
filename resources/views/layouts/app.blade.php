<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet">
    @vite(['resources/css/backend/backend.css'])
</head>
<body class="font-sans antialiased">
<div class="nk-main">
    <div class="nk-wrap nk-wrap-nosidebar">
        <div class="nk-content">
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
</div>
<script src="{{ asset('js/bundle.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
