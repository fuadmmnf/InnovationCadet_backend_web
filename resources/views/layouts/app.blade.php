<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ThemeDox">
    <!-- Favicon Icon -->
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Innovation Cadet')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('styles')
</head>
<body  class="td_theme_3">


<!-- Start Preloader -->
<div class="td_preloader">
    <div class="td_preloader_in">
        <span></span>
        <span></span>
    </div>
</div>
<!-- End Preloader -->

<!-- Header Section -->
<header>
    @include('partials.header') <!-- Optional, if you extract the header -->
</header>

<!-- Main Content Section -->
<main>
    @yield('content')
</main>

<!-- Footer Section -->
<footer>
    @include('partials.footer') <!-- Optional, if you extract the footer -->
</footer>

<div class="td_scrollup">
    <i class="fa-solid fa-arrow-up"></i>
</div>

<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slick.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.js') }}"></script>
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

@stack('scripts')
</body>
</html>
