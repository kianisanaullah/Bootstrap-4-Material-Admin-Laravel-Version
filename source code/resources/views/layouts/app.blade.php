<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if((isset($title)))echo($title); else echo ('Boostrap Template | Authentication') ?></title>
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
</head>
<body>
<div class="page login-page">
    @yield('content')
</div>
@include('includes.scripts')
@include('includes.footer')
@yield('footer')
</body>
</html>
