<html>
<head>
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <meta name="description" content="Laravel tutorial bangla | Rabbil Hasan is an Expert Web Developer in Bangladesh. He is highly talented, experienced, professional and cooperative software engineer, working in programming and web world for more than 4 years. Moreover Rabbil Hasan has a skilled team for achieving his goal named “Team Rabbil”.Team Rabbil assure you a wide range of quality IT services. ">
    <meta name="keywords" content="Laravel  tutorial bangla, Expert Web Developer in Bangladesh, Expert Mobile App Developer in Bangladesh, Android App Developer in Bangladesh">
    <meta name="author" content="Rabbil Hasan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/fontawesome.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>

@include('Component.menu')
@yield('content')
@include('Component.footer')
@include('Component.video_play_modal')
<div id="snackbar"></div>
<script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/axios.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/site.js') }}"></script>
</body>
</html>
