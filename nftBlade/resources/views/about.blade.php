{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        
        <title>About Us</title>

        <!-- Fonts -->
          </head>
    <body>
        @include('includes.navbar')
        <div class='about'>
            <img  class='aboutTop' src="{{ asset('assets/about.jpg') }}" alt="about us">
       
            <div class='aboutBottom'>
            <h1>ABOUT US</h1>
            <p>Welcome to our non-fungible token website! We are a team of passionate individuals who believe in the transformative power
                of blockchain technology and its ability to revolutionize the way we create, share, and exchange value. Our mission is 
                to provide a user-friendly platform for artists, creators, and collectors to buy, sell, and trade unique and valuable digital 
                assets using non-fungible tokens. We believe that non-fungible tokens have the potential to unlock new opportunities for creators 
                to monetize their work and for collectors to own and trade unique digital assets. Our team is dedicated to providing a secure, 
                transparent, and efficient marketplace for non-fungible tokens, and we are committed to supporting the growth and adoption of this 
                exciting new technology. Thank you for joining us on this journey!</p>
                        
            </div>
        </div>
    @include('includes.footer')
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pixel NFTArt|About</title>
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
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>

<body>

    <div id="about">
    @include('includes.navbar')

        <div class="container position-relative" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6">
                    <h2>About Us</h2>
                    <p>Welcome to pixel NFTArt website! We are a team of passionate individuals who believe in the
                        transformative power
                        of blockchain technology and its ability to revolutionize the way we create, share, and exchange
                        value. Our mission is
                        to provide a user-friendly platform for artists, creators, and collectors to buy, sell, and
                        trade unique and valuable digital
                        assets using non-fungible tokens. We believe that non-fungible tokens have the potential to
                        unlock new opportunities for creators
                        to monetize their work and for collectors to own and trade unique digital assets. Our team is
                        dedicated to providing a secure,
                        transparent, and efficient marketplace for non-fungible tokens, and we are committed to
                        supporting the growth and adoption of this
                        exciting new technology. Thank you for joining us on this journey!</p>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')


    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
