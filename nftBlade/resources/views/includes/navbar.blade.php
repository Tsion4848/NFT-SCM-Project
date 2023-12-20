{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <title>Pixel NFTArt</title>

        <!-- Fonts -->
    </head>
    <body>
        <div class="navbar">
            <div class="left">
                <img src="{{ asset('assets/logo.png') }}" alt="logo" id="pixel" />
                <a href="{{ url('/upload') }}"><button>
                    <x-gmdi-upload-s class="svg"/>
                    Upload
                </button></a>
            </div>
            <div class="right">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/explore') }}">Explore</a>
                <a href="{{ url('/about') }}">About Us</a>
                <a href="{{ url('/help') }}">Help</a>
                <a href="{{ url('/contact') }}">Contact Us</a>
            </div>
    
        </div>
    </body>
</html> --}}
@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pixexl NFTArt</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>

<body>

    <!-- ======= Header ======= -->
    <div id="header" class=" ">
        <div class="container-fluid container-xxl d-flex align-items-center">

            <div id="logo" class="me-auto d-flex align-items-center">
                <img class="scrollto" src="{{ asset('assets/logoWhite.png') }}" alt="" title="">

                @auth
                    <a class="nav-link scrollto" id="logout" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ url('/') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/explore') }}">Explore</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/about') }}">About Us</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/help') }}">Help</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a class="buy-tickets scrollto" href="{{ url('/upload') }}">Create</a>

        </div>
    </div>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
