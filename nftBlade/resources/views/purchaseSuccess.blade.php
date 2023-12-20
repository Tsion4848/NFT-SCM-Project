<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/purchaseSuccess.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Pixel NFTArt|Success</title>

    <!-- Fonts -->
</head>

<body>
    @include('includes.navbar')
    <div class='successPurchase'>
        {{-- <canvas id="confetti"></canvas> --}}
        <a href="{{ url('/explore') }}">
            <svg viewBox="0 0 24 24" fill="none" id="svg" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7071 4.29289C12.0976 4.68342 12.0976 5.31658 11.7071 5.70711L6.41421 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H6.41421L11.7071 18.2929C12.0976 18.6834 12.0976 19.3166 11.7071 19.7071C11.3166 20.0976 10.6834 20.0976 10.2929 19.7071L3.29289 12.7071C3.10536 12.5196 3 12.2652 3 12C3 11.7348 3.10536 11.4804 3.29289 11.2929L10.2929 4.29289C10.6834 3.90237 11.3166 3.90237 11.7071 4.29289Z" fill="#ffffff"></path> </g></svg>
        </a>
        <p>Congratulations</p>
        <p>You have made your offer</p>
    </div>

    @include('includes.footer')
    {{-- <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@^1.0.1"></script>
        <script>
            function fireConfetti() {
                var confettiSettings = {
                    "target": "confetti",
                    "max": "80",
                    "size": "1.5",
                    "animate": true,
                    "props": ["circle", "square", "triangle", "line"],
                    "colors": [[165,104,246],[230,61,135],[0,199,228],[253,214,126]],
                    "clock": "25",
                    "rotate": true,
                    "start_from_edge": true,
                    "respawn": true
                };
                var confetti = new ConfettiGenerator(confettiSettings);
                confetti.render();
            }
        </script> --}}
</body>

</html>
