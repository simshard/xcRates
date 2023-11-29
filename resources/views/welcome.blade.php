<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livewire Table</title>

        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="flex items-center justify-center min-h-screen">

    <div class="w-full max-w-6xl">
        <livewire:xr-table></livewire:xr-table>
    </div>

    @livewireScripts
    </body>
</html>
