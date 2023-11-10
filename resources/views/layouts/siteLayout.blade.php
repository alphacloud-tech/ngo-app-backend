<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Paulsabinna Foundation for the Needy</title>
    <meta name="author" content="Mannat Studio">
    <meta name="description" content="Paulsabinna Foundation for the Needy">
    <meta name="keywords"
        content="Paulsabinna Foundation for the Needy, charity, charity foundation, donate, donation, fundraiser, fundraising, ngo, non-profit, nonprofit, organization, volunteer">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }} ">


    <link href="{{ asset('assets/vendor/pg-calendar/css/pignose.calendar.min.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/pickadate/themes/default.date.css') }}">


    <!-- Daterange picker -->
    <link href="{{ asset('assets/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{ asset('assets/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="{{ asset('assets/vendor/jquery-asColorPicker/css/asColorPicker.min.css') }}" rel="stylesheet">
    <!-- Material color picker -->
    <link
        href="{{ asset('assets/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
        rel="stylesheet">

    <link href="{{ asset('assets/vendor/summernote/summernote.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">

    {{-- <link href=" {{ asset('assets/vendor/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.css" rel="stylesheet">




    {{-- {{asset('assets/')}} --}}

    <!--========================================================================-->
    @yield('styles')
    <!--========================================================================-->
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ url('/dashboard') }}" class="brand-logo">
                {{-- <img class="logo-abbr" src="{{ asset('assets/images/logo.png') }} " alt="">
                <img class="logo-compact" src="{{ asset('assets/images/logo-text.png') }} " alt=""> --}}
                {{-- <img class="brand-title" src="{{ asset('assets/images/logo-text.png') }} " alt=""> --}}
                Paulsabinna Foundation
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->




        <!--**********************************
            Header start
        ***********************************-->
        @include('pages.common.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->





        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('pages.common.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->





        <!--**********************************
            Content body start
        ***********************************-->
        @yield('content')

        <!--**********************************
            Content body end
        ***********************************-->






        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://eldantech.com" target="_blank">Eldantech</a>
                    <?php
                    $year = date('Y');
                    echo $year;
                    ?></p>
                {{-- <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p> --}}
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/chartist/js/chartist.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/pg-calendar/js/pignose.calendar.min.js') }}"></script>


    <script src="{{ asset('assets/js/dashboard/dashboard-2.js') }}"></script>

    <script src="{{ asset('assets/vendor/summernote/js/summernote.min.js') }}"></script>
    <!-- Summernote init -->
    <script src="{{ asset('assets/js/plugins-init/summernote-init.js') }}"></script>



    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="{{ asset('assets/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- clockpicker -->
    <script src="{{ asset('assets/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>

    <!-- asColorPicker -->
    <script src="{{ asset('assets/vendor/jquery-asColor/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js') }}"></script>

    <!-- Material color picker -->
    <script src="{{ asset('assets/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
    </script>
    <!-- pickdate -->
    <script src="{{ asset('assets/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ asset('assets/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('assets/vendor/pickadate/picker.date.js') }}"></script>

    <!-- Daterangepicker -->
    <script src="{{ asset('assets/js/plugins-init/bs-daterange-picker-init.js') }}"></script>

    <!-- Clockpicker init -->
    <script src="{{ asset('assets/js/plugins-init/clock-picker-init.js') }}"></script>
    <!-- asColorPicker init -->
    <script src="{{ asset('assets/js/plugins-init/jquery-asColorPicker.init.js') }}"></script>
    <!-- Material color picker init -->
    <script src="{{ asset('assets/js/plugins-init/material-date-picker-init.js') }}"></script>
    <!-- Pickdate -->
    <script src="{{ asset('assets/js/plugins-init/pickadate-init.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/datatables.init.js') }}"></script>


    {{-- <!-- Demo scripts -->
    <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>

    <script src="{{ asset('assets/vendor/jqueryui/js/jquery-ui.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/fullcalendar/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/fullcalendar-init.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.js"></script>


    <!-- Circle progress -->


    <!--========================================================================-->
    @yield('scripts')
    <!--========================================================================-->

</body>

</html>
