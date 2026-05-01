

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Portfolio')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f8f8;
        }

        .text-primary-custom {
            color: #198754;
        }

        .bg-primary-custom {
            background-color: #198754;
        }

        .section-padding {
            padding: 80px 0;
        }
    </style>
</head>

<body>

    {{-- Navbar --}}
    @include('komponen.navbar')

    {{-- Content --}}
    <main class="container">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('komponen.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>