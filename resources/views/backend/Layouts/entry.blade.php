<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>User login</title>



    <!-- loader-->
    <link href="{{ asset('assets/css') }}/pace.min.css" rel="stylesheet" />
    <script src="{{ asset('assets/js') }}/pace.min.js"></script>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/css') }}/bootstrap.min.css" rel="stylesheet" />

    <link href="{{ asset('assets/css/toastify.min.css') }}" rel="stylesheet" />

    <!-- Custom Style-->
    <link href="{{ asset('assets/css') }}/app-style.css" rel="stylesheet" />


</head>

<body class="bg-theme bg-theme1">

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->
    <!-- Start wrapper-->
    <div id="wrapper">
        @yield('content')
        <!--Start Back To Top Button-->
        {{-- <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a> --}}
        <!--End Back To Top Button-->



        @include('backend.Components.rightside')

    </div><!--End wrapper-->

    <!-- loader scripts -->
    <script src="{{ asset('assets/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('assets/js') }}/bootstrap.bundle.min.js"></script>

    {{-- <script src="{{ asset('assets/js') }}/jquery.loading-indicator.js"></script> --}}

    <!-- Custom scripts -->
    {{-- <script src="{{ asset('assets/js') }}/app-script.js"></script> --}}
    <script src="{{ asset('assets/js/toastify-js.js') }}"></script>
    <script src="{{ asset('assets/js/axios.min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>


    <!-- Index js -->
    {{-- <script src="{{ asset('assets/js') }}/index.js"></script> --}}



</body>

</html>
