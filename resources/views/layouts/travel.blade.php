<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@hasSection('template_title')@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
        <meta name="description" content="">
        <meta name="author" content="Jeremy Kenedy">
        <!-- <link rel="shortcut icon" href="/favicon.ico"> -->

        <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

<!-- Animate.css -->
<link rel="stylesheet" href="{{ asset('travel/css/animate.css') }}">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="{{ asset('travel/css/icomoon.css') }}">
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{ asset('travel/css/bootstrap.css') }}">
<!-- Superfish -->
<link rel="stylesheet" href="{{ asset('travel/css/superfish.css') }}">
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{ asset('travel/css/magnific-popup.css') }}">
<!-- Date Picker -->
<link rel="stylesheet" href="{{ asset('travel/css/bootstrap-datepicker.min.css') }}">
<!-- CS Select -->
<link rel="stylesheet" href="{{ asset('travel/css/cs-select.css') }}">
<link rel="stylesheet" href="{{ asset('travel/css/cs-skin-border.css') }}">

<link rel="stylesheet" href="{{ asset('travel/css/style.css') }}">


<!-- Modernizr JS -->
<script src="{{ asset('travel/js/modernizr-2.6.2.min.js') }}"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->


        {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        {{-- Fonts --}}
        

        {{-- Styles --}}
        

        

        <style type="text/css">
            @yield('template_fastload_css')

            @if (Auth::User() && (Auth::User()->profile) && (Auth::User()->profile->avatar_status == 0))
                .user-avatar-nav {
                    background: url({{ Gravatar::get(Auth::user()->email) }}) 50% 50% no-repeat;
                    background-size: auto 100%;
                }
            @endif

        </style>

        {{-- Scripts --}}
        

        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

       

        @yield('head')

    </head>
    <body>
        

    @if (Auth::User())
        <div id="fh5co-wrapper">
            <div id="fh5co-page">
            @include('partials.header')
            @include('partials.header-nav')
            @yield('content')
        </div>
        </div>
    @endif

        {{-- Scripts --}}
        

        <script src="{{ asset('travel/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('travel/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('travel/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('travel/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('travel/js/sticky.js') }}"></script>

	<!-- Stellar -->
	<script src="{{ asset('travel/js/jquery.stellar.min.js') }}"></script>
	<!-- Superfish -->
	<script src="{{ asset('travel/js/hoverIntent.js') }}"></script>
	<script src="{{ asset('travel/js/superfish.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('travel/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('travel/js/magnific-popup-options.js') }}"></script>
	<!-- Date Picker -->
	<script src="{{ asset('travel/js/bootstrap-datepicker.min.js') }}"></script>
	<!-- CS Select -->
	<script src="{{ asset('travel/js/classie.js') }}"></script>
	<script src="{{ asset('travel/js/selectFx.js') }}"></script>
	
	<!-- Main JS -->
	<script src="{{ asset('travel/js/main.js') }}"></script>

        @if(config('settings.googleMapsAPIStatus'))
            {!! HTML::script('//maps.googleapis.com/maps/api/js?key='.config("settings.googleMapsAPIKey").'&libraries=places&dummy=.js', array('type' => 'text/javascript')) !!}
        @endif

        

    </body>
</html>
