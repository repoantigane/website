<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-carousel.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/fontawesome/css/fontawesome.css">
    <title>@yield('title', 'Antigane')</title>

    @vite([])


</head>

<body class="pb-0" style="background-color: #121212; padding: 0;">

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/chart.umd.js"></script>
    <script src="/js/dashboard.js"></script>
    @env('local')
    <script src="http://localhost:35729/livereload.js"></script>
    @endenv
</body>

</html>
