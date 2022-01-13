<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Taro</title>
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
        });
        function getDirection() {
            var windowWidth = window.innerWidth;
            var direction = window.innerWidth <= 991 ? 'horizontal' : 'vertical';
            return direction;
        }
    </script>
</html>
