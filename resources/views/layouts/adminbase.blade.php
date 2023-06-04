<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/custom.css" type="text/css>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>




    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>AçıkAdmin - @yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('assets/admin')}}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('assets/admin')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets/admin')}}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets/admin')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('assets/admin')}}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('assets/admin')}}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets/admin')}}/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets/admin')}}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('assets/admin')}}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets/admin')}}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('assets/admin')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets/admin')}}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assets/admin')}}/css/theme.css" rel="stylesheet" media="all">
    <!--jscroll-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/js/jquery.jscroll.min.js"></script>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="animsition">
    @include('adminp.header')


    @include('adminp.sidebar')

    @include('adminp.headerdesktop')
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
    @section('content')

    @show


    @include('adminp.footer')
</body>

</html>
<!-- end document-->
