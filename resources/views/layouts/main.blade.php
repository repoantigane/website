<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-carousel.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title', 'Antigane')</title>




</head>

<body class="bg-dark pb-0">

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>
