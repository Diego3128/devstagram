<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Devstagram-@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-10 min-h-dvh relative pb-12 bg-slate-50">

    @if (session('error'))
        <div class="absolute w-full top-0 left-0">
            <p
                class="bg-red-500 text-gray-50 rounded-md p-3 mx-auto text-center w-11/12 relative mt-7  max-w-96 font-bold capitalize">
                {{ session('error') }}
            </p>
        </div>
    @endif

    @include('layouts._partials.header')

    <main class="container mx-auto mt-10">

        <h2 class="font-black text-center text-3xl mb-10">@yield('title')</h2>

        @yield('content')

    </main>

    <footer class="text-center font-bold uppercase p-5 text-gray-500 border absolute w-full bottom-0 left-0">
        <p>Devstagram - &#169 all rights reserved {{ now()->year }}</p>
    </footer>
</body>

</html>
