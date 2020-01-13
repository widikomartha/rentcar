<!doctype html>
<html lang="en">

<head>
    <title>Admin - @yield('title')</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">

    <!-- Favicon icon -->
    <link rel="icon" href="{!! asset('assets/admin-template/images\favicon.ico') !!}" type="image/x-icon">
    <!-- Google font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,6000">
    <!-- Required Fremwork -->
    <link rel="stylesheet" href="{!! asset('assets/admin-template/bower_components\bootstrap\css\bootstrap.min.css') !!}">
    <!-- feather Awesome -->
    <link rel="stylesheet" href="{!! asset('assets/admin-template/icon\feather\css\feather.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin-template/css/font-awesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin-template/icon\themify-icons\themify-icons.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin-template/icon\icofont\css\icofont.css') !!}">
    <!-- Data Table Css -->
    <link rel="stylesheet" href="{!! asset('assets/admin-template/bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin-template/pages\data-table\css\buttons.dataTables.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin-template/bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css') !!}">
    <!-- toolbar css -->
    <link rel="stylesheet" href="{!! asset('assets/admin-template/pages\toolbar\jquery.toolbar.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin-template/pages\toolbar\custom-toolbar.css') !!}">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/admin-template\css\component.css') !!}">
    <!-- Style.css -->
    <link rel="stylesheet" href="{!! asset('assets/admin-template/css\style.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin-template/css\jquery.mCustomScrollbar.css') !!}">

</head>

<body>

@include('admin-includes.preloader')

      <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

                    <!-- HEADER -->
                    @include('admin-includes.header')
            
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <!-- NAVBAR -->
                    @include('admin-includes.navbar')

                    <!-- CONTENT -->
                    @yield('content')
                
                </div>
            </div>
        </div>
    </div>


    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('assets/admin-template/bower_components\jquery\js\jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/bower_components\jquery-ui\js\jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/bower_components\popper.js\js\popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/bower_components\bootstrap\js\bootstrap.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('assets/admin-template/bower_components\jquery-slimscroll\js\jquery.slimscroll.js') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('assets/admin-template/bower_components\modernizr\js\modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/bower_components\modernizr\js\css-scrollbars.js') }}"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('assets/admin-template/bower_components\chart.js\js\Chart.js') }}"></script>
    <!-- amchart js -->
    <script type="text/javascript" src="{{ asset('assets/admin-template/js\pcoded.min.js') }}"></script>
    <!-- data-table js -->
    <script type="text/javascript" src="{{ asset('assets/admin-template/bower_components\datatables.net\js\jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/bower_components\datatables.net-buttons\js\dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/pages\data-table\js\jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/pages\data-table\js\pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/pages\data-table\js\vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/pages\data-table\extensions\colreorder\js\dataTables.colReorder.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/bower_components\datatables.net-buttons\js\buttons.print.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/bower_components\datatables.net-buttons\js\buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/bower_components\datatables.net-responsive\js\dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('assets/admin-template\js\modalEffects.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template\js\classie.js') }}"></script>
    
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('assets/admin-template/pages\data-table\extensions\colreorder\js\colreorder-custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/js\vartical-layout.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/js\jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/pages\dashboard\custom-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-template/js\script.min.js') }}"></script>

    

<!-- Global site tag (gtag.js) - Google Analytics -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>

</html>