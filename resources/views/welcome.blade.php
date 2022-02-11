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
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.min.js"></script>
    <script>
    jQuery(document).ready(function($) {
  
      var $stage = $('.stage'),
      $textA = $('#customerTextA'),
      $textB = $('#customerTextB'),
      $textC = $('#customerTextC'),
      $computerA = $('#computerA'),
      $approved = $('#approved'),
      $computerB = $('#computerB');
      $bullets = $('.fake-bullets');

      // initialize controller
      var controller = new ScrollMagic.Controller();
      controller.scrollTo(0);

      // build timeline with animation tweens
      var scrollAnimation = new TimelineMax();
      scrollAnimation.set($stage, {autoAlpha: 1})


      .from($textA, 3, {y:400, opacity: 1})
      .to($bullets, 1, {y:-200, className:"+=one"}) // Bullets
      .to($textA, 50, {y:-200, opacity: 1})
      .to($textA, 3, {y:-400, opacity: 0})

      .from($textB, 4, {y:400, opacity: 0})
      .to($bullets, 1, {className:"+=two"}) // Bullets
      .to($bullets, 1, {className:"-=one"}) // Bullets
      .to($textB, 50, {y:-200, opacity: 1})
      .to($textB, 4, {y:-400, opacity: 0})

      .from($textC, 3, {y:400, opacity: 0})
      .to($bullets, 1, {className:"+=three"}) // Bullets
      .to($bullets, 1, {y:-200, className:"-=two"}) // Bullets
      .to($textC, 50, {y:-200, opacity: 1})
      .to($textC, 3, {y:-400, opacity: 1})


      // build scene and link scrolling to animation
      var scene = new ScrollMagic.Scene({triggerElement: "#how-it-works", duration: 4000})
      .setPin(".stage")
      .addTo(controller)
      .setTween(scrollAnimation);
      scene.offset(300);
    });
    </script>

</html>
