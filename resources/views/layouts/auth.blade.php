<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />


</head>

<body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>

<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="card-body">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-left">
                    <div class="auth-brand text-center text-lg-left">
                        <a href="/index.html" class="logo-dark text-center">
                            <div>
                                <img src="/assets/images/rlogo.png" alt="" class="logo-dark" height="38" >
                            </div>
                        </a>
                        <a href="/index.html" class="logo-light">
                            <img src="/assets/images/rlogo.png" alt="" class="logo-dark" height="38" >
                        </a>
                    </div>
                </div>

                @yield('content')

            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
{{--            <h2 class="mb-3">Department of Computer Science Pet Project</h2>--}}
{{--            <h2 class="mb-3">Department of Computer Science Pet Project</h2>--}}
{{--            <p class="lead">"2019 - 2020 Exco Software Team" </p>--}}
            <p class="lead">
                Share Acedemic materials among your peeps!
            </p>
            <p>
                ACM Share
            </p>
        </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->
</div>
<!-- end auth-fluid-->

<!-- bundle -->
<script src="{{asset('assets/js/vendor.min.js')}}"></script>
<script src="{{asset('assets/js/app.min.js')}}"></script>

</body>

</html>
