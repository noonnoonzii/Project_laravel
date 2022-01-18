<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/admin/asset/img/logo.jpg')}}">
  <link rel="icon" type="image/png" href="{{asset('/admin/asset/img/logo.jpg')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dreg Skate Shop
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"/>
  <!-- CSS Files -->
  <link href="{{url('admin/asset/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{url('admin/asset/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href='admin/asset/demo/demo.css' rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset('admin/asset/img/logo.jpg')}}">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="{{route('home')}}" class="simple-text logo-normal">
          Drag SkateShop 
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          @if(Auth::user()->check())
          <li class="active ">
            <a href="{{url('/admin/index')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          {{-- <li>
            <a href="{{route('home_pic')}}">
              <i class="nc-icon nc-diamond"></i>
              <p>Home Picture</p>
            </a>
          </li> --}}
          <li>
            <a href="{{Route('product')}}">
              <i class="nc-icon nc-pin-3"></i>
              <p>Product</p>
            </a>
          </li>
          <li>
            <a href="{{url('admin/news/index/')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>News</p>
            </a>
          </li>
          <li>
            <a href="{{route('category')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Category</p>
            </a>
          </li>
          @endif

          {{-- <li>
            <a href="{{route('users',[ Auth::user()->id ])}}">
                <i class="nc-icon nc-single-02"></i>
                <p class="text-Black">{{ Auth::user()->name }}</p>
            </a>
          </li> --}}
        </ul>
      </div>
    </div>
  </div>
@yield('content');
<!--   Core JS Files   -->
<script src="{{asset('admin/asset/js/core/jquery.min.js')}}"></script>
<script src="{{asset('admin/asset/js/core/popper.min.js')}}"></script>
<script src="{{asset('admin/asset/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/asset/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{asset('admin/asset/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('admin/admin/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="('admin/asset/js/paper-dashboard.min.js?v=2.0.1'" type="text/javascript"></script> <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src='admin/asset/demo/demo.js'></script>
</body>

</html>