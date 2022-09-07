<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <link href="/css/app.css" rel="stylesheet">
</head>

<body class="antialiased">

    @include('home.layouts.navbar')
    @yield('content')

    <div class="mx-auto max-w-lg">
        <div role="status" class="my-7 animate-pulse">

        </div>

        <div role="status" class="my-6 animate-pulse">

        </div>
    </div>

    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
</body>

</html>