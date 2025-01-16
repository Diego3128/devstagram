<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Devstagram-@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-10">

    <header class="p-4 border-b shadow bg-white">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">Devstagram</h1>

            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-sm text-gray-500" href="#">Login</a>
                <a class="font-bold uppercase text-sm text-gray-500" href="#">Register</a>
            </nav>

        </div>
    </header>

    <main class="container mx-auto mt-10">

        <h2 class="font-black text-center text-3xl mb-10">@yield('title')</h2>

        @yield('content')

    </main>

    <footer class="text-center font-bold uppercase p-5 text-gray-500">
        <p>Devstagram - &#169 all rights reserved {{now()->year}}</p>
    </footer>
</body>

</html>