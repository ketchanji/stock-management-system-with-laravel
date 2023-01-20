<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css'])
        @vite(['resources/css/style.css'])
        <script src="//unpkg.com/alpinejs" defer></script>
        
        <title>Transport System</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        {{ $slot }}
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
    </body>
</html>
