<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    @include('layouts.partials.header')
    <div class="container mx-auto p-4">
        @yield('content')
    </div>
    @include('layouts.partials.footer')
</body>
</html>
