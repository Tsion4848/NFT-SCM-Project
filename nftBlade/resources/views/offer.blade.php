{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/offer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <title>Pixel NFTArt|Home</title>

        <!-- Fonts -->
           </head>
    <body>
        @include('includes.navbar')
        <div class='offer'>
            <div class='outerButton'>
                <h1>Checkout</h1>
                <div class='offerForm'>
                    <p class='para'>Enter your credit card number</p>
                    <form class='form' method="POST" action="{{ route('offer') }}" encType='multipart/form-data'>
                        @csrf
                        <input class="email_input" name="card_number" id="card_number" type="text" placeholder="Enter your credit card"/>
                        <p class='para'>Enter the amount</p>
                        <input class="email_input" name="price" id="price" type="text" placeholder="Bid"/>
                        <div class='purchase'>
                            <a href="{{ url('/purchaseSuccess',) }}" id="submit"><button type="submit">Submit</button></a>
                            <a href="{{ url('/offer') }}"><button type="submit">Cancel</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @include('includes.footer')
    </body>
</html>
 --}}

 @extends('layouts.app')
 
 @section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pixel NFTArt|Checkout</title>
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
    <link rel="stylesheet" href="{{ asset('css/offer.css') }}">

</head>

<body>

    <div id="subscribe">
    @include('includes.navbar')

        <div class="container" data-aos="zoom-in">
            <div class="section-header">
                <h2>Checkout</h2>
            </div>

            <form method="POST" action="{{ route('offer') }}" encType='multipart/form-data'>
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 d-flex">
                        <input type="text" name="card_number" class="form-control"
                            placeholder="Enter your Card Number">
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex">
                        <input type="text" name="price" class="form-control" placeholder="Bid">
                    </div>
                    <br/><br/>
                </div>
                <div class="submit">
                    <button type="submit">Submit</button>
                </div>
            </form>

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
