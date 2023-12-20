{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/details.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @include('includes.navbar')
        <div class='alien'>
            <div class='left'>
                <img class="left" src="{{ asset('/images/'.$image->path) }}" alt="specific image">
            </div>
            <div class='right'>
                <h1>{{ $image->name }}</h1>
                <br/>
                <div class='firstInline'>
                    <span>Created On</span>
                    <span>Items</span>
                    <span>Owners</span>
                    <span>Floor Price</span>
                    <span>Current Price</span>
                    <span>Creator Earnings</span>
                </div>
                <div>&nbsp;</div>
                <div class='secondInline'>
                    <span id="date">{{$image->created_at->format('Y-m-d')}}</span>
                    <span>10</span>
                    <span>48</span>
                    <span>{{$image->price}} ETH</span>
                    <span>5 ETH</span>
                    <span>&nbsp;&nbsp;&nbsp;5%</span>
                </div>
                <div>&nbsp;</div>
                <h2>Auction Duration</h2>
                 @include('includes.countdown', ['expiration_timestamp' => $expiration_timestamp])
                <p>{{ $image->description }}</p>
                <h3>by {{ $image->photographer }}</h3>
                <a href= "{{ route('offer.store', ['id' => $image->id]) }}"><button class='makeOffer'>Make Offer</button></a>
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

    <title>Pixel NFTArt|ImageInfo</title>
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
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">

</head>

<body>

    <div id="speakers-details">
        @include('includes.navbar')

        <div class="container">
            <div class="section-header">
                <h2>Image Details</h2>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <img class="img-fluid" src="{{ asset('/images/' . $image->path) }}" alt="specific image">
                </div>

                <div class="col-md-6">
                    <div class="details">
                        <h2>{{ $image->name }}</h2>
                        <div class='firstInline'>
                            <span>Created On</span>
                            <span>Items</span>
                            <span>Owners</span>
                            <span>Floor Price</span>
                            <span>Current Price</span>
                            <span>Creator Earnings</span>
                        </div>
                        <div class='secondInline'>
                            <span id="date">{{ $image->created_at->format('Y-m-d') }}</span>
                            <span>10</span>
                            <span>48</span>
                            <span>{{ $image->price }} ETH</span>
                            <span>{{ $image->price + 5 }} ETH</span>
                            <span>&nbsp;&nbsp;&nbsp;5%</span>
                        </div>
                        <br />
                        <h5>Auction Duration</h5>
                        @include('includes.countdown', ['expiration_timestamp' => $expiration_timestamp])
                        <br />
                        <p>{{ $image->description }}</p>
                        <h5>By {{ $image->photographer }}</h5>
                        <a href="{{ route('login') }}"><button class='makeOffer'>Make
                                Offer</button></a>
                    </div>
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
