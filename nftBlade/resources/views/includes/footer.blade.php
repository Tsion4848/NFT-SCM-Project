{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <title>Pixel NFTArt</title>

        <!-- Fonts -->
        </head>
    <body>
        <div class='footer'>
            <div class='media'>
                <x-bi-instagram class="svg"/>
                <x-css-facebook class="svg" />
                <x-bi-twitter class="svg" />
                <x-bi-youtube class="svg" />
            </div>
            <p> &copy; 2023 pixelnftart</p>
          </div>
    
        </div>
    </body>
</html> --}}

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TheEvent Bootstrap Template - Index</title>
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
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>
    <div id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>My Account</h4>
                        <ul>
                            <li> <a href="#">Profile</a></li>
                            <li> <a href="{{ url('/login') }}">Login</a></li>
                            <li> <a href="{{ url('/register') }}">Sign Up</a></li>
                            <li> <a href="{{ url('/upload') }}">Create</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li> <a href="{{ url('/about') }}">About us</a></li>
                            <li> <a href="{{ url('/help') }}">Help Center</a></li>
                            <li> <a href="#">Terms of service</a></li>
                            <li> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Other Links</h4>
                        <ul>
                            <li> <a href="{{ url('/about') }}">About us</a></li>
                            <li> <a href="{{ url('/help') }}">Help Center</a></li>
                            <li> <a href="#">Terms of service</a></li>
                            <li> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Join the community</h4>
                        <p>
                            <strong>Phone:</strong> +251 988 776 655<br>
                            <strong>Email:</strong> pixelArt@gmail.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>pixelArt</strong>. All Rights Reserved
            </div>
        </div>
    </div><!-- End  Footer -->

    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
