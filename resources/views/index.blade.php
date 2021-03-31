<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome/css/all.min.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/all.min.css') }}"></link>--}}
    <script src="{{ asset('fonts/fontawesome/js/all.min.js') }}" defer></script>
    {{--    <link href="{{ asset('js/app.js') }}">--}}
</head>
<body>
    <div id="app">
        <file-upload></file-upload>
    </div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
