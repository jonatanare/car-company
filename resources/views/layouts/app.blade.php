<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Car Company</title>
        <meta name="description" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fugit harum, magnam reiciendis tempora consectetur doloribus sunt, dolorem, voluptatibus sed natus incidunt. Impedit a eligendi consectetur minus! At, nesciunt illo.">
        

        <!--Google Fonts link-->
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('/css/iconfont.css')}}">
        <link rel="stylesheet" href="{{asset('/css/slick/slick.css')}}">
        <link rel="stylesheet" href="{{asset('/css/slick/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/jquery.fancybox.css')}}">
        <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">

        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{asset('css/plugins.css')}}" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('css/my-styles.css')}}" />

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}" />

        <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">


        @yield('content')




        <script src="{{asset('/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('/js/vendor/bootstrap.min.js')}}"></script>
    
        <script src="{{asset('/js/jquery.magnific-popup.js')}}"></script>
        <script src="{{asset('/js/jquery.mixitup.min.js')}}"></script>
        <script src="{{asset('/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('/js/jquery.masonry.min.js')}}"></script>
    
        <!--slick slide js -->
        <script src="{{asset('/css/slick/slick.js')}}"></script>
        <script src="{{asset('/css/slick/slick.min.js')}}"></script>
    
    
        <script src="{{asset('/js/plugins.js')}}"></script>
        <script src="{{asset('/js/main.js')}}"></script>
    
    </body>
</html>