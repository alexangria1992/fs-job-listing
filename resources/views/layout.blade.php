<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Workopia | Find and List Jobs ')</title>
    @vite('resources/js/app.js')

</head>
<body class="bg-gray-100">
        <h1>Welcome to Workopia</h1>
        <main class="container mx-auto p-4 mt-4">
            @yield("content")
        </main>
</body>
</html>