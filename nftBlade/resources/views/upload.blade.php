{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/upload.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Pixel NFTArt|Create</title>

</head>

<body>
    @include('includes.navbar')
    <div>
        <div class='title'>
            <h1>Upload your NFT art here</h1>
        </div>
        <div class='contact'>
            <form action="{{ route('upload') }}" encType='multipart/form-data' id='contact-form' method='POST'>
                @csrf
                <input id='chooseFile' type='file' name='image' />
                <label htmlFor='name'>Photo Name</label>
                <input name='name' placeholder='Enter full name' type='text' />
                <label htmlFor='description'>Description</label>
                <textarea rows="6" placeholder="Enter your photo description" name="description"></textarea>
                <label htmlFor='photographer'>Photographer</label>
                <input name='photographer' placeholder='Enter photographer name' type='text' />
                <label htmlFor='price'>Floor Price</label>
                <input name='price' placeholder='Enter floor price' type='number' />
                <label htmlFor='duration'>Auction Duration</label>
                <input type="date" name='duration' placeholder='Enter auction duration' />
                <button type='submit'>Upload</button>
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

    <title>Pixel NFTArt|Create</title>
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
    <link rel="stylesheet" href="{{ asset('css/upload.css') }}">
</head>

<body>

    <div id="contact" class="section-bg about">
        @include('includes.navbar')

        <div class="container container position-relative" data-aos="fade-up">

            <div class="section-header">
                <h2>Create your NFT here</h2>
            </div>

            <div class="form">
                <form action="{{ route('upload') }}" role="form" class="upload" encType='multipart/form-data'
                    id='contact-form' method='POST'>
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label htmlFor='image'>Photo Upload</label>
                            <input class="form-control" id='chooseFile' required type='file' name='image' />
                            <br />
                            <label htmlFor='name'>Photo Name</label>
                            <input name='name' placeholder='Enter full name' class="form-control" type='text' />
                            <br/>
                            <label htmlFor='photographer'>Photographer</label>
                            <input name='photographer' class="form-control" required
                                placeholder='Enter photographer name' type='text' />
                            <br /><br/><br/>
                            <button type="submit">Create</button>
                        </div>

                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label htmlFor='price'>Floor Price</label>
                            <input name='price' class="form-control" required placeholder='Enter floor price'
                                type='number' />
                            <br />
                            <label htmlFor='duration'>Auction Duration</label>
                            <input type="date" required class="form-control" name='duration'
                                placeholder='Enter auction duration' />
                            <br/>
                            <label htmlFor='description'>Description</label>
                            <textarea rows="5" required class="form-control" placeholder="mnbm" name="description"></textarea>
                        </div>
                    </div>
                       
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            
            @elseif($errors->has('image'))
    <div class="alert alert-danger">
        {{ $errors->first('image') }}
    </div>
@endif
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
