<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Obit Scraper </title>
        <!-- Bootstrap core CSS -->

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('fonts/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-multiselect.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
        <!-- Custom styling plus plugins -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('css/components.css') }}" rel="stylesheet">
        <script src="{{ asset('js/jquery.min.js') }}"></script>

   </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                    @include('layouts.adminheader')
                <!-- top navigation -->

                <!-- /top navigation -->
                    @include('layouts.navigation')
                <!-- page content -->

                <div class="right_col" role="main">

                    @yield('content')

                </div>
                <!-- /page content -->
                @include('layouts.footer')
                <!-- /footer content -->

            </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <!-- Bootstrap -->
        <script src="{{ asset('js/bootstrap.min.js') }}" data-semver="3.1.1" data-require="bootstrap"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        
        <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
        
        <script type="text/javascript" src="{{ asset('js/bootstrap-multiselect.js') }}"></script>
        @yield('scripts')
    </body>
</html>
