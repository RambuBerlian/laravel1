<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'My Application')</title>

    <!-- CSS (Anda bisa mengganti dengan CDN atau asset Anda) -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>


    <!-- Bagian Konten Utama (Akan diganti dengan tampilan spesifik) -->
    <main>
        @yield('content')
    </main>

</body>
</html>
