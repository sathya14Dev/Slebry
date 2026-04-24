<!-- layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

@include('components.navbar')

<main class="w-full h-full mx-auto ">
    @yield('content')
</main>

@include('components.footer')

</body>
</html>