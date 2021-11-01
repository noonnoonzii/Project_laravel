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
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dreg Skate Shop
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('/back_end/admin/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('/back_end/admin/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('/back_end/admin/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset('back_end/admin/img/logo.jpg')}}">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Drag SkateShop 
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.html">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./home_pic.html">
              <i class="nc-icon nc-diamond"></i>
              <p>Change Home Picture</p>
            </a>
          </li>
          <li>
            <a href="./product.html">
              <i class="nc-icon nc-pin-3"></i>
              <p>Product</p>
            </a>
          </li>
          <li>
            <a href="./news.html">
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
          <li>
            <a href="./user.html">
                <i class="nc-icon nc-caps-small"></i>
                <p>Profile</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="nc-icon nc-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>