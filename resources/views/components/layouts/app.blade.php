<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
         @vite(['resources/css/app.css','resources/js/app.js'])
        <title>{{ $title ?? 'Tailwind Test' }}</title>
        @livewireStyles
    </head>
    <body class="bg-color-primary text-color-white tracking-wider">
        @livewire('partials.navbar')
        {{ $slot }}
        @livewireScripts

        
    </body>
</html>
