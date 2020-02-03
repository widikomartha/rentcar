<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
    <meta charset="utf-8">
    <title>DoCar - @yield('title')</title>


    <link rel="icon" href="{!! asset('assets/admin-template/images\favicon.ico') !!}" type="image/x-icon">

    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
    <!-- Fonts END -->

    <!-- Global styles START -->          
    <link rel="stylesheet" href="{!! asset('assets/pages-template/plugins/font-awesome/css/font-awesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/pages-template/plugins/bootstrap-4.4.1-dist\css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/pages-template/plugins/bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin-template/icon\feather\css\feather.css') !!}">
    <!-- Global styles END --> 
    
    <!-- Page level plugin styles START -->
    <link rel="stylesheet" href="{!! asset('assets/pages-template/pages/css/animate.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/pages-template/plugins/fancybox/source/jquery.fancybox.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/pages-template/plugins/owl.carousel/assets/owl.carousel.css') !!}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link rel="stylesheet" href="{!! asset('assets/pages-template/pages/css/components.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/pages-template/pages/css/slider.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/pages-template/pages/css/style-shop.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/pages-template/corporate/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/pages-template/corporate/css/style-responsive.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/pages-template/corporate/css/themes/red.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/pages-template/corporate/css/custom.css') !!}">
    <!-- Theme styles END -->
    
    <link rel="stylesheet" href="{!! asset('assets/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') !!}">
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">

    <!-- BEGIN HEADER -->
    @include('pages-includes.header')
    
    <!-- Header END -->
    @yield('content')

    
    <!-- BEGIN FOOTER -->
    @include('pages-includes.footer')

    <!-- END FOOTER -->

    

    <script type="text/javascript" src="{{ asset('assets/pages-template/plugins/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages-template/plugins/jquery-migrate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages-template/plugins/bootstrap-4.4.1-dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages-template/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages-template/corporate/scripts/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages-template/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- END CORE PLUGINS -->

    <!-- pop up -->
    <script type="text/javascript" src="{{ asset('assets/pages-template/plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
    <!-- slider for products -->
    <script type="text/javascript" src="{{ asset('assets/pages-template/plugins/owl.carousel/owl.carousel.min.js') }}"></script>
    <!-- product zoom -->
    <script type="text/javascript" src="{{ asset('assets/pages-template/plugins/zoom/jquery.zoom.min.js') }}"></script>
    <!-- Quantity -->
    <script type="text/javascript" src="{{ asset('assets/pages-template/plugins/bootstrap-touchspin/bootstrap.touchspin.js') }}"></script>
    
    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script type="text/javascript" src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/moment/min/moment-with-locales.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/pages-template/corporate/scripts/layout.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages-template/pages/scripts/bs-carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages-template/pages/scripts/checkout.js') }}"></script>
  
    
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initFixHeaderWithPreHeader();
            Layout.initNavScrolling();
            Layout.initSliderRange();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
    <script type="text/javascript">
       $('#carousel-example-generic').carousel({
            interval: 10,
            cycle: true,
            autoplay: true,
        }); 
    </script>

@yield('script')

</body>
<!-- END BODY -->
</html>