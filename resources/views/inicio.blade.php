<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite(['resources/css/index.css', 'resources/css/app.css']) --}}
    @vite(['resources/js/bootstrap.js'])
    <title>Pruebas con Reverb</title>
</head>

<body>
    <div id="chat"></div>
    <x-pulse>
        <livewire:reverb.connections cols="full" />
        <livewire:reverb.messages cols="full" />
        ...
    </x-pulse>
</body>

</html>

<script src="{{ asset('/js/index.js') }}"></script>
