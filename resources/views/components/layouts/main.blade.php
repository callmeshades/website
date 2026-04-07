<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <script async src="https://plausible.io/js/pa-_xNUsRWrVqUU1zxDHtGdK.js"></script>
    <script>
        window.plausible=window.plausible||function(){(plausible.q=plausible.q||[]).push(arguments)},plausible.init=plausible.init||function(i){plausible.o=i||{}};
        plausible.init()
    </script>
</head>
<body class="bg-gray-900">
<x-navbar/>
<div {{ $attributes->merge(['class' => '']) }}>
    {{ $slot }}
</div>
@livewireScripts
</body>
</html>
