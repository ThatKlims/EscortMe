<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Escort Me</title>
{{--    @livewireStyles--}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel = "icon" href = "{{asset('images/logo.png')}}" type = "image/png">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>

@yield('content')

<script src="https://cdn.tailwindcss.com"></script>
{{--@livewireScripts--}}
</body>
</html>
