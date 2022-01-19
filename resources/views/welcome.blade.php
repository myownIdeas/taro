<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Taro</title>

        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicons/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicons/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicons/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicons/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicons/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicons/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicons/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicons/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicons/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicons/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicons/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicons/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicons/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('favicons/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{asset('favicons/ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
        <div id="app"></div>
    </body>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('frontend/js/swiper-bundle.min.js')}}"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            direction: getDirection(),
            autoHeight: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,

            },
            on: {
                resize: function () {
                    swiper.changeDirection(getDirection());
                },
            },
            mousewheel: {
                virtual: true,
                sensitivity:1000,
                releaseOnEdges:true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the header
        var header = document.getElementById("sldr");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset < sticky) {
                    swiper.mousewheel.disable();
            } else {
                    swiper.mousewheel.enable();
            }
        }


        function getDirection() {
            var windowWidth = window.innerWidth;
            var direction = window.innerWidth <= 991 ? 'horizontal' : 'vertical';
            return direction;
        }
    </script>
</html>
