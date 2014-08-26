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
    {{ HTML::style('theme/rs-plugin/css/settings.css')
    {{ HTML::style('theme/css/style.css')
    {{ HTML::style('theme/css/colors/default.css')
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
@include('master/header')
<div class="container-full">
    @yield('content')
</div>
@include('master/footer')
<div class="col-lg-12 text-center">
    <div class="back-to-top"> <i class="ion-ios7-arrow-up"></i> </div>
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

<script type="text/javascript">

    var revapi;
    @if(Auth::check() == true)
    $.idleTimeout('#idletimeout', '#idletimeout a', {
        idleAfter: {{ Session::has('idleAfter') ? Session::get('idleAfter') : 5  }},
    pollingInterval: {{ Session::has('pollingInterval') ? Session::get('pollingInterval') : 2 }},
    keepAliveURL: "{{ url('keepAlive') }}",
        serverResponseEquals: 'OK',
        onTimeout: function(){
        $(this).slideUp();
        window.location = "{{ url('logout') }}";
    },
    onIdle: function(){
        $(this).slideDown(); // show the warning bar
    },
    onCountdown: function( counter ){
        $(this).find("span").html( counter ); // update the counter
    },
    onResume: function(){
        $(this).slideUp(); // hide the warning bar
    }
    });
    @endif
    jQuery(document).ready(function() {

        revapi = jQuery('.tp-banner').revolution(
            {
                delay:9000,
                startwidth:1170,
                startheight:500,
                hideThumbs:true,
                navigationType:"none",
                fullWidth:"on",
                forceFullWidth:"on"
            });
        jQuery("#frntLogin").fancybox({
            padding: 0,
            openEffect	: 'elastic',
            closeEffect	: 'elastic',
            overlayShow : 'true',
            maxWidth : '345px',
            closeBtn : false,
            scrolling : 'no',
            helpers : {
                overlay : {
                    closeClick : true,  // if true, fancyBox will be closed when user clicks on the overlay
                    speedOut   : 200,   // duration of fadeOut animation
                    showEarly  : true,  // indicates if should be opened immediately or wait until the content is ready
                    locked     : true   // if true, the content will be locked into overlay
                },
                title : {
                    type : 'float' // 'float', 'inside', 'outside' or 'over'
                }
            }
        });
        jQuery("#frntSignup").fancybox({
            padding: 0,
            openEffect	: 'elastic',
            closeEffect	: 'elastic',
            overlayShow : 'true',
            maxWidth : '345px',
            closeBtn : false,
            scrolling : 'no',
            helpers : {
                overlay : {
                    closeClick : true,  // if true, fancyBox will be closed when user clicks on the overlay
                    speedOut   : 200,   // duration of fadeOut animation
                    showEarly  : true,  // indicates if should be opened immediately or wait until the content is ready
                    locked     : true   // if true, the content will be locked into overlay
                },
                title : {
                    type : 'float' // 'float', 'inside', 'outside' or 'over'
                }
            }
        });
        jQuery("#backLogin").fancybox({
            padding: 0,
            openEffect	: 'elastic',
            closeEffect	: 'elastic',
            overlayShow : 'true',
            maxWidth : '345px',
            closeBtn : false,
            scrolling : 'no',
            helpers : {
                overlay : {
                    closeClick : true,  // if true, fancyBox will be closed when user clicks on the overlay
                    speedOut   : 200,   // duration of fadeOut animation
                    showEarly  : true,  // indicates if should be opened immediately or wait until the content is ready
                    locked     : true   // if true, the content will be locked into overlay
                },
                title : {
                    type : 'float' // 'float', 'inside', 'outside' or 'over'
                }
            }
        });
        jQuery("#goSignup").fancybox({
            padding: 0,
            openEffect	: 'elastic',
            closeEffect	: 'elastic',
            overlayShow : 'true',
            maxWidth : '345px',
            closeBtn : false,
            scrolling : 'no',
            helpers : {
                overlay : {
                    closeClick : true,  // if true, fancyBox will be closed when user clicks on the overlay
                    speedOut   : 200,   // duration of fadeOut animation
                    showEarly  : true,  // indicates if should be opened immediately or wait until the content is ready
                    locked     : true   // if true, the content will be locked into overlay
                },
                title : {
                    type : 'float' // 'float', 'inside', 'outside' or 'over'
                }
            }
        });
        jQuery("#getPass").fancybox({
            padding: 0,
            openEffect	: 'elastic',
            closeEffect	: 'elastic',
            overlayShow : 'true',
            maxWidth : '345px',
            closeBtn : false,
            scrolling : 'no',
            helpers : {
                overlay : {
                    closeClick : true,  // if true, fancyBox will be closed when user clicks on the overlay
                    speedOut   : 200,   // duration of fadeOut animation
                    showEarly  : true,  // indicates if should be opened immediately or wait until the content is ready
                    locked     : true   // if true, the content will be locked into overlay
                },
                title : {
                    type : 'float' // 'float', 'inside', 'outside' or 'over'
                }
            }
        });

        var notify = false;
        @if(Session::has('flashSuccess'))
        $.CrystalNotification({
            title: "Success!",
            image: "{{url('/')}}/themes/{{$theme}}/notify/img/Colorfull/Messages-colorfull.png",
            content: "{{ Session::get('flashSuccess') }}",
            sound: true,
            panelbutton: true,
            closebutton: true,
            timeout: 4000,
            addtopanel: true
        });
        notify = true;
        @endif
        @if(Session::has('flashError'))
        $.CrystalNotification({
            title: "Error!",
            image: "{{url('/')}}/themes/{{$theme}}/notify/img/Colorfull/Messages-colorfull.png",
            content: "{{ Session::get('flashError') }}",
            sound: true,
            panelbutton: true,
            closebutton: true,
            timeout: 4000,
            addtopanel: true
        });
        @endif
        @if(Session::has('flashNotice'))
        $.CrystalNotification({
            title: "Error!",
            image: "{{url('/')}}/themes/{{$theme}}/notify/img/Colorfull/Messages-colorfull.png",
            content: "{{ Session::get('flashNotice') }}",
            sound: true,
            panelbutton: true,
            closebutton: true,
            timeout: 4000,
            addtopanel: true
        });
        @endif
        @if(Session::has('errors'))
        $.CrystalNotification({
            title: "Errors!",
            image: "{{url('/')}}/themes/{{$theme}}/notify/img/Colorfull/Spotify-colorfull.png",
            content: "{{ Session::get('errors') }}",
            sound: true,
            panelbutton: true,
            closebutton: true,
            timeout: 4000,
            addtopanel: true
        });
        notify = true;
        @endif
        if (notify) {
            ShowCrystalNotificationPanel();
        }
    });	//ready

</script>
{{ HTML::script('themes/'.$theme.'/js/init.js') }}
{{ HTML::script('themes/'.$theme.'/js/profile.js') }}
{{ HTML::script('themes/'.$theme.'/js/superfish.js') }}
{{ HTML::script('themes/'.$theme.'/js/bootstrap.min.js') }}
{{ HTML::script('themes/'.$theme.'/js/retina.min.js') }}
<!--{{ HTML::script('themes/'.$theme.'/assets/validate.js') }}-->
{{ HTML::script('themes/'.$theme.'/js/jquery.placeholder.js') }}
{{ HTML::script('themes/'.$theme.'/js/functions.js') }}
{{ HTML::script('themes/'.$theme.'/js/classie.js') }}
{{ HTML::script('themes/'.$theme.'/js/uisearch.js') }}
<script>new UISearch( document.getElementById( 'sb-search' ) );</script>
</body>
</html>
