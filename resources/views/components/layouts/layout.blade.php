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

    @session('success')
        <div class="text-blue-500 px-4 py-3 absolute bottom-4 right-4 rounded-lg">{{ $value }}</div>
    @endsession

    <x-layouts.footer></x-layouts.footer>
</body>
</html>