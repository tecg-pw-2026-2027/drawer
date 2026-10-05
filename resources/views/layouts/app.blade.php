<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible"
              content="ie=edge">
        <title>{{ config('app.name') }}</title>
        @livewireStyles
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>

        <div class="container">
            <nav>
                <ul class="flex justify-end gap-2">
                    <li><a class="underline" href="{{ route('students') }}" wire:navigate>Étudiants</a></li>
                    <li><a class="underline" href="{{ route('projects') }}" wire:navigate>Projets</a></li>
                </ul>
            </nav>
            <h1 class="font-bold uppercase mb-4 text-2xl">dd</h1>
            {{ $slot }}
        </div>
        <livewire:drawer />
        @livewireScripts
    </body>
</html>
