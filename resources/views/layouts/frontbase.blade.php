<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Açıklar İnşaat - @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets')}}/img/AçıklarLogo.jpeg" rel="icon">
  <link href="{{asset('assets')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets')}}/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('assets')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
  
  <!--jscroll-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="/js/jquery.jscroll.min.js"></script>

  
  <!-- =======================================================
  * Template Name: EstateAgency - v4.8.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

@include('home.sections.header')

  <main id="main">
@section('content')

@show

  </main><!-- End #main -->


@include('home.sections.footer')

</body>

</html>
