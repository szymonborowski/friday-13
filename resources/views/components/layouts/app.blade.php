<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Jason') . ' • ' . __($title ?? '') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="gap-4 bg-white mt-10 shadow-xl ring-1 ring-gray-900/5 mx-auto max-w-screen-xl rounded-lg text-gray-600">
<script src="https://kit.fontawesome.com/77c3d5ef96.js" crossorigin="anonymous"></script>
<header class="flex p-4">
    <div>
        <img src="{{url('images/jason-s.webp')}}" />
    </div>
    <div class="w-max my-auto">
        <h2 class="text-3xl font-bold">{{ __('Jason') }}</h2>
        <span>{{ __('Your serial multiplier') }}</span>
    </div>
</header>
<div class="grid grid-cols-5">
    <div class="p-6">
        <div class="mb-4">
            <div class="text-l font-bold">{{__('Menu')}}:</div>
            <ul>
                <li>
                    <a class="text-sky-500 hover:text-red-500" class="text-sky-500 hover:text-red-500" href="{{url('/')}}">{{__('Home')}}</a>
                </li>
                <li>
                    <a class="text-sky-500 hover:text-red-500" href="{{url('/faq')}}">{{__('Faq')}}</a>
                </li>
            </ul>
        </div>
        <div class="mb-4">
            <div class="text-l font-bold">{{__('Languages')}}:</div>
            <ul >
                <li>
                    <a class="text-sky-500 hover:text-red-500" href="{{url('/language/pl')}}">{{ __('PL') }}</a>
                </li>
                <li>
                    <a class="text-sky-500 hover:text-red-500" href="{{url('/language/en')}}">{{ __('EN') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-span-4 p-6">
        {{ $slot }}
    </div>
</div>
<footer class=" p-4">
    <div class="text-center">&#169; Copyright 2024 Szymon Borowski</div>
</footer>
@livewireScripts
@vite(['resources/js/app.js'])
</body>
</html>
