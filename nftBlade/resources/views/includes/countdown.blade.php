<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/countdown.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Pixel NFTArt</title>

    <!-- Fonts -->
</head>

<body>
    <div class='countDown' id="countdown">
        <span class="two-numbers days"></span>
        <span>Days</span>
        <span class='two-numbers hours'></span>
        <span>Hours</span>
        <span class='two-numbers minutes'></span>
        <span>Minutes</span>
        <span class='two-numbers seconds'></span>
        <span>Seconds</span>
    </div>

    <script>
        var expirationTimestamp = {{ $expiration_timestamp }};

        setInterval(function() {
            var now = new Date().getTime();
            var distance = expirationTimestamp * 1000 - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.querySelector('.days').innerHTML = ('0' + days).slice(-2);
            document.querySelector('.hours').innerHTML = ('0' + hours).slice(-2);
            document.querySelector('.minutes').innerHTML = ('0' + minutes).slice(-2);
            document.querySelector('.seconds').innerHTML = ('0' + seconds).slice(-2);
        }, 1000);
    </script>
</body>

</html>
