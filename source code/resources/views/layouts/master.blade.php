<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if((isset($title)))echo($title); else echo ('Bootstrap Material Admin by Bootstrapious.com') ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{URL::to('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{URL::to('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{URL::to('assets/css/fontastic.css')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{URL::to('assets/css/style.green.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{URL::to('assets/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{URL::to('assets/img/favicon.ico')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
    {{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    {{--<![endif]-->--}}
</head>
<body>
<div class="page">
        @include('includes.header')
        <div class="page-content d-flex align-items-stretch">
            @include('includes.navbar')
            <div class="content-inner">
                @yield('content')
                @include('includes.footer')
            </div>
        </div>
</div>
        @include('includes.scripts')
        @yield('footer')
</body>
</html>
