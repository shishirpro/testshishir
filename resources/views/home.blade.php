<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="text-center py-3 bg-amber-500 text-white text-4xl font-bold">hello jami bhai</h1>

    <div class="max-w-6xl mx-auto py-5 bg-green-200">
        <div class="grid grid-cols-2">
            <a class="text-center bg-gray-300 text-red-50 text-4xl font-bold" href="/about">About</a>
            <a class="text-center bg-gray-600 text-red-50 text-4xl font-bold" href="/about">contract us</a>
        </div>
    </div>
</body>
</html>

{{-- php artisan make:controller HomeController  --}}