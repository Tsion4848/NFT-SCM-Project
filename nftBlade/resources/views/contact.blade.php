{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @include('includes.navbar')
            <div class='contact'><img  class='left' src="{{ asset('assets/contact.jpg') }}" alt="about us">
                
                <div class='right'>
                    <h1>Contact Us</h1>
                    <form id='contact-form'>
                        <label htmlFor='name'>Full Name</label>
                        <input name='name' placeholder='Enter full name' type='text' value="name"/>
                        <label htmlFor='email'>Email</label>
                        <input name='email' placeholder='Enter email' type='email' value="email"/>
                        <label htmlFor='feedback'>Message</label>
                        <textarea rows="6" placeholder="Enter your message" name="feedback" required value="message"></textarea>
                        <button type="submit">Send</button>
                    </form>
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

    <title>Pixel NFTArt|Contact</title>
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
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>

<body>

    <div id="contact" class="section-bg about">
    @include('includes.navbar')
        
        <div class="container container position-relative" data-aos="fade-up">

            <div class="section-header">
                <h2>Contact Us</h2>
            </div>

            <div class="row contact-info">
                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="bi bi-phone"></i>
                        <h3>Phone Number</h3>
                        <p>+251 988 776 655</p>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="contact-address">
                    </div>
                </div>



                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p>pixelArt@gmail.com</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <form action="" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label htmlFor='name'>Full Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label htmlFor='email'>Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label htmlFor='feedback'>Message</label>
                        <textarea class="form-control" name="message" rows="5" placeholder="" required></textarea>
                    </div>
                    <br />
                    <div class="text-center"><button id="send" type="submit">Send Message</button></div>
                </form>
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
