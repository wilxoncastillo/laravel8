<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

@php
    $color = 'red';
    $alert = "alert2"
@endphp

<body>
    <div class="container mx-auto">
        <x-alert :color="$color" class="mb-4">
            <x-slot name="title">
                Titulo 1

            </x-slot>
            
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum excepturi ex inventore dolore officia adipisci quisquam necessitatibus reprehenderit, debitis deserunt eaque officiis atque aspernatur est enim eum velit nisi sed?
        </x-alert>

        <x-alert color="gray" class="mb-4">
            <x-slot name="title">
                Titulo 1
            </x-slot>
            
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum excepturi ex inventore dolore officia adipisci quisquam necessitatibus reprehenderit, debitis deserunt eaque officiis atque aspernatur est enim eum velit nisi sed?
        </x-alert>

        <x-alert2 class="rounded-lg">
            <x-slot name="title">
                Titulo 1
            </x-slot>
            
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum excepturi ex inventore dolore officia adipisci quisquam necessitatibus reprehenderit, debitis deserunt eaque officiis atque aspernatur est enim eum velit nisi sed?
        </x-alert2>

        <x-dynamic-component :component="$alert">
            <x-slot name="title">
                Titulo 1
            </x-slot>
            
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum excepturi ex inventore dolore officia adipisci quisquam necessitatibus reprehenderit, debitis deserunt eaque officiis atque aspernatur est enim eum velit nisi sed?
        </x-dynamic-component>
    </div>
</body>

</html>
