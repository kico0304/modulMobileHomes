<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Panel</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSS files from template START -->
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{ asset('css/icofont.min.css') }}">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Admin Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/admin/admin-style.css') }}">
    <!-- CSS files from template END -->

    @yield('componentcss')

</head>
<body id="top">
<div id="app">
     <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
         <p><a href="{{ url('/admin')}}">Create New Product</a></p>
         <p style="margin-left: 30px;"><a href="{{ url('/admin/parts')}}">Create New Part of product</a></p>
         <p style="margin-left: 30px;"><a href="{{ url('/admin/options')}}">Create New Option</a></p>
    </nav>
    <main>
        @yield('content')
    </main>
</div>
<!-- JS files from template START -->
<!-- Bootstrap 4.3.2 -->
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('js/slick.min.js') }}"></script>
<!-- Counterup -->
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/shuffle.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<!-- Google Map -->
<script src="{{ asset('js/map.js') }}"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>     -->
<!-- Other scripts -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/contact.js') }}"></script>
<!-- Admin scripts -->
<script src="{{ asset('js/admin/admin.js') }}"></script>
<!-- JS files from template END -->
@yield('js')
</body>
</html>
