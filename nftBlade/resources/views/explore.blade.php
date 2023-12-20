{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/explore.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @include('includes.navbar')
            <div class='image'>
                <h1 class='imageTitle'>Arts</h1>
                            @foreach ($images as $image)
                <div class='imageList'>
                    <div class="imageItem">
                        <a href="{{ route('image.details', ['id' => $image->id]) }}">
                        <img src="{{ asset('/images/'.$image->path) }}" alt="uploaded image">    
                        <h1>{{ $image->name }}</h1>
                        </a>  
                    </div>                        
                </div>
                            @endforeach                        
                       
            </div>
        @include('includes.footer')
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pixel NFTArt|Explore</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    {{-- 
    <!-- Favicons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Fonts --> --}}

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
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">
</head>

<body>

    <div id="speakers">

        @include('includes.navbar')

        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Arts</h2>
            </div>
            <div class="row">
                @foreach ($images as $image)
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ route('image.details', ['id' => $image->id]) }}">
                            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                                <img src="{{ asset('/images/' . $image->path) }}" alt="Speaker 1" class="img-fluid">
                                <div class="details">
                                    <h3>{{ $image->name }}</h3>
                                    <p>Floor: {{ $image->price }} ETH</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            
        </div>

    </div>

    @include('includes.footer')

    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
