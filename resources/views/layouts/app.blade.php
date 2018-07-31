
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>E-Dehari</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}" />

         <!-- Bootstrap checking -->
        <link href="{{url('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{url('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{url('css/bootstrap.min.css.map')}}" rel='stylesheet' type='text/css' />

        <link href="{{url('css/circle.css')}}" rel='stylesheet' type='text/css' />
        

        <link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <!-- start plugins -->
        <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>
        <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
        <!-- start slider -->
        <link href="{{url('css/slider.css')}}" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="{{url('js/modernizr.custom.28468.js')}}"></script>
        <script type="text/javascript" src="{{url('js/jquery.cslider.js')}}"></script>


        <!-- Owl Carousel Assets -->
        <link href="css/owl.carousel.css" rel="stylesheet">



    </head>
    <body>
        @include('includes.header')

        <!-- @yield('inner-header') -->
        @include('includes.messages')
        @yield('content')


        @include('includes.footer')

        <!--Scroll to top Button-->

        @yield('page-footer')



    <script src="{{('https://use.fontawesome.com/7518055ce7.js')}}"></script>
    </body>
</html>
