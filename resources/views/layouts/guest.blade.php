<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .parent {
            position: relative;
        }

        .img-bg {
            opacity: 0.2;
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body class="font-sans text-gray-900 antialiased">
    <!-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"> -->
    <!-- <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 "> -->
    <div class="parent relative min-h-screen flex flex-col sm:justify-center items-center">
        <img class="img-bg" src="/images/PPI2.jpg" alt="Random image">

        <!-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"> -->
        <div class="relative sm:max-w-sm w-full mt-10">
            <div class="card bg-yellow-400 shadow-lg  w-full h-full rounded-3xl absolute transform -rotate-6"></div>
            <div class="card bg-red-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
            <div class="relative w-full rounded-3xl px-6 py-4 bg-white shadow-md">
                {{ $slot }}
            </div>
        </div>
    </div>

    </div>
</body>

</html>