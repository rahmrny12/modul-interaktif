<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modul Interaktif</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    @livewireStyles
</head>

<body>
    @include('layouts.partials.navbar')

    @yield('content')

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Copyright {{ now()->format('Y') }} dibuat dengan &hearts;	</span>
        </div>
    </footer>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>

    @yield('script')

    @livewireScripts
</body>

</html>
