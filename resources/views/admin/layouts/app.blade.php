<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{url('/admin/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('/admin/css/style.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{url('/admin/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{url('/admin/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{url('/admin/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="{{'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'}}" rel="stylesheet">
    <link href="{{'http://fonts.googleapis.com/css?family=Roboto:400,700,300'}}" rel='stylesheet' type='text/css'>
    <link href="{{url('admin/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
		<!-- <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script> -->
			 <script src="{{url('/admin/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
			 <script src="{{url('/admin/js/chartist.min.js')}}"></script>

</head>
<body>

	@include('admin.inc.sidebar')

	@yield('content')

	@include('admin.inc.footer')

</body>


<!--   Core JS Files   -->

	 <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
 <script src="{{url('/admin/js/bootstrap.min.js')}}" type="text/javascript"></script>
 <script src="{{('https://use.fontawesome.com/7518055ce7.js')}}"></script>

 <!--  Charts Plugin -->


	 <!--  Notifications Plugin    -->
	 <script src="{{url('/admin/js/bootstrap-notify.js')}}"></script>


	 <!--  Google Maps Plugin    -->
	 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

	 <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
 <script src="{{url('/admin/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

 <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
 <script src="{{url('/admin/js/demo.js')}}"></script>

 <script type="text/javascript">
		 $(document).ready(function(){

				 // demo.initChartist();

		 });
 </script>
