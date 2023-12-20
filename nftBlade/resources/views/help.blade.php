{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/help.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        
        <title>Help</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @include('includes.navbar')

            <div class='upLeft'>
                <h3>How to sell my NFT?</h3>
                <ul>
                    <li>as soon as you enter our site hit the upload button at the top right corner.</li>
                    <li>after hitting enter, you should upload your image from your device and fill all the necessary information needed</li>
                    <li>finally, submit your form and your image is uploaded</li>
                </ul>
            </div>
            <img  class='middle' src="{{ asset('assets/help.png') }}" alt="about us">
            <div class='bottomRight'>
                <h3>How to make offer for an NFT?</h3>
                <ul>
                    <li>as soon as you enter our site, there are a wide range of images that you can choose and buy.</li>
                    <li> Click the image you want to buy and click the make offer button </li>
                    <li>then choose which way you want to make your payment with (crypto or credit card)</li>
                    <li>Finally, click complete purchase and your transaction is completed.</li>
                </ul>
            </div>
          
                @include('includes.footer')
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pixel NFTArt|Help</title>
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
    <link rel="stylesheet" href="{{ asset('css/help.css') }}">
</head>

<body>

    <section id="about">
    @include('includes.navbar')

        <div class="container position-relative" data-aos="fade-up">
            <div class="section-header">
                <h2>Help Center</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <h3>How to Create my NFT?</h3>
                    <ul>
                        <li>As soon as you enter our site hit the upload button at the top right corner.</li>
                        <li>after hitting enter, you should upload your image from your device and fill all the
                            necessary information needed</li>
                        <li>finally, submit your form and your image is uploaded</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                </div>
                <div class="col-lg-4">
                    <h3>How to make offer for an NFT?</h3>
                    <ul>
                        <li>as soon as you enter our site, there are a wide range of images that you can choose and buy.
                        </li>
                        <li> Click the image you want to buy and click the make offer button </li>
                        <li>then choose which way you want to make your payment with (crypto or credit card)</li>
                        <li>Finally, click complete purchase and your transaction is completed.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

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
