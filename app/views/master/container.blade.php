<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}" />
    <title>Uf Guidance</title>
    <!--Fonts Online-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    {{ HTML::style('theme/rs-plugin/css/settings.css') }}
    {{ HTML::style('theme/css/style.css') }}
    {{ HTML::style('theme/css/colors/default.css') }}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<!--LOADER===========================================
<div id="page-loader">
  <div class="loader7"> <img src="images/Preloader.gif" alt="" ></div>
</div>-->
<div id="wrap">
@include('master/header')
@include('master/banner')
@yield('content')
</div>
{{ HTML::script('theme/js/jquery-1.9.1.min.js') }}
{{ HTML::script('theme/js/wow.min.js') }}
{{ HTML::script('theme/js/bootstrap.min.js') }}
{{ HTML::script('theme/js/jquery.stellar.min.js') }}
{{ HTML::script('theme/js/jquery.prettyPhoto.js') }}
{{ HTML::script('theme/js/owl.carousel.min.js') }}
{{ HTML::script('theme/js/jquery.isotope.min.js') }}
{{ HTML::script('theme/js/jquery.easing.1.3.js') }}
{{ HTML::script('theme/js/isotope.pkgd.min.js') }}
{{ HTML::script('theme/js/smooth-scroll.js') }}
{{ HTML::script('theme/js/jquery.magnific-popup.min.js') }}
{{ HTML::script('theme/rs-plugin/js/jquery.themepunch.plugins.min.js') }}
{{ HTML::script('theme/rs-plugin/js/jquery.themepunch.revolution.min.js') }}
{{ HTML::script('theme/js/main.js') }}
</body>
</html>

