<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
@vite(['resources/css/app.css','resources/js/app.js'])
<div class="relative mx-auto mt-8 w-full max-w-container px-4 sm:px-6 lg:px-8">

    <x-header/>
    <x-contaianer>
    @yield('content')
    </x-contaianer>
    </div>

</body>
</html>