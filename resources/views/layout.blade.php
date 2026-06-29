<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Document')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="text-center text-2xl py-3 font-semibold text-gray-950 @yield('header-bg', 'bg-green-400')">@yield('header-title')</h1>
    <div class="max-w-6xl mx-auto py-5 bg-green-200">
        <div class="grid grid-cols-2">
            @yield('navigation')
        </div>
    </div>
    @yield('content')
</body>
</html>
