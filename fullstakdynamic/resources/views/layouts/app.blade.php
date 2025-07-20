<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Dopefolio')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Jamil</p>
    </footer>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/animations.js') }}"></script>
</body>
</html>
