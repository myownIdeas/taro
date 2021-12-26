<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Taro</title>

        <!-- Fonts -->
        {{--<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">--}}

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
        <!-- all css -->
        <link rel="stylesheet" href="{{asset('admin/css/all.css')}}">
        <!-- flaticon css -->
        <link rel="stylesheet" href="{{asset('admin/css/flaticon.css')}}">
        <!-- slick css -->
        <link rel="stylesheet" href="{{asset('admin/css/slick.css')}}">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
        <!-- dark css -->
        <link rel="stylesheet" href="{{asset('admin/css/dark-mode.css')}}">
        <!-- responsive fonts -->
        <link rel="stylesheet" href="{{asset('admin/css/responsive.css')}}">
         <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div id="app">

                </div>


            </div>
        </div>
    </body>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('frontend/js/swiper-bundle.min.js')}}"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            direction: "vertical",
            autoHeight: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,

            },
            mousewheel: {
                virtual: true,
                sensitivity:1,
                releaseOnEdges:true,
            },

        });

        var swiper = new Swiper(".mySwiperMobile", {
      
            pagination: {
                el: ".swiper-pagination",
                clickable: true,

            },
        

        });
    </script>
</html>
