<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ToDo List </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <script src="https://unpkg.com/alpinejs@3.12.0/dist/cdn.min.js" defer></script> --}}
    {{-- font khmer --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-gray-950">

    <main class="">
        {{ $slot }}
    </main>
</body>

</html>
