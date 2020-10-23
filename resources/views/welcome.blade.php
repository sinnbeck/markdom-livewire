<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        @stack('styles')

    </head>
    <body class="antialiased">
        <select>
            @foreach(app('markdom')->getAvailableStyles() as $style)
                <option value="{{$style}}">{{$style}}</option>
            @endforeach
        </select>

        <livewire:markdown />
        @livewireScripts
    </body>
</html>
