<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>groham | HTML Ecommerce Template</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/eleganticon.css')}}">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/rs-plugin/css/style.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/rs-plugin/css/navstylechange.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/rs-plugin/css/noneed.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/rs-plugin/css/settings.css')}}" media="screen" />
    <!-- MAGNIFIC POPUP -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cookie:400' rel='stylesheet' type='text/css'>
    <!-- FAVICON -->
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/images/apple-touch-icon-114x114.png')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="home01">
    <!--Header-->
    @include('client/header')
    @yield('content')
    @include('client/footer')
    <!--==============================
            Footer js pluging -->
    <!-- jQuery -->
    <script src="{{asset('assets/js/jquery-1.12.0.min.js')}}"></script>
    <!-- modernizr -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="{{asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- wow js-->
    <script type="text/javascript" src="{{asset('assets/js/wow.min.js')}}"></script>
    <!-- venobox js-->
    <script type="text/javascript" src="{{asset('assets/js/venobox.min.js')}}"></script>
    <!-- mouse hover js-->
    <script src="{{asset('assets/js/jquery.directional-hover.js')}}"></script>
    <!-- owl js -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- magnific popup -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- smoothscroll -->
    <script src="{{asset('assets/js/smoothscroll.js')}}"></script>
    <!-- settings -->
    <script type="text/javascript" src="{{asset('assets/js/setting.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/setting-revolution-1.js')}}"></script>
</body>
</html>
