<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Pizza Max</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Navbar -->
    <x-custom.navbar />

    <!-- Main Content -->
    {{ $slot }}

    <!-- Footer -->
    <x-custom.footer />
</body>

</html>