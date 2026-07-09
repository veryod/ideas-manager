<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idea Tracker - Track and manage all of your ideas easily</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col">
    <x-layouts.navbar></x-layouts.navbar>
    <main class="flex justify-center w-screen">
        {{ $slot }}
    </main>
    <x-layouts.footer></x-layouts.footer>
</body>
</html>