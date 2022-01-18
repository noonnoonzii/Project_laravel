<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dreg SkateShop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{url('main/img/logo.jpg')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('main/img/logo.jpg')}}">

    <link rel="stylesheet" href="{{url('main/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('main/css/templatemo.css')}}">



    <!-- Load fonts style after rendering the layout styles and icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{url('main/css/fontawesome.min.css')}}">

</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap">
        <img src="{{url('/main/img/logo.jpg')}}" width="70px" height="70px" class="img-thumbnail rounded-circle">
        </a>
            <h class="navbar-brand text-white h2 mt-0 mb-1" href="index.html">
                  Dreg Skateshop
            </h>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#fff; font-size:26px;"></i></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{url('product')}}">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('news')}}">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#tempaltemo_footer">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('about')}}">About we</a>
                        </li>
                    </ul>
                </div>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{route('home')}}">
                                        My Account
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                

            </div>

            

        </div>
    </nav>
        <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="w-100 pt-1 mb-5 text-right">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="get" class="modal-content modal-body border-0 p-0">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                        <button type="submit" class="input-group-text bg-success text-light">
                            <i class="fa fa-fw fa-search text-white"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        @yield('content')
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-6 pt-5">
                    <h2 class="h2 text-danger border-bottom pb-3 border-light logo">Dreg Skate Shop</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <u class="h3 text-light" name="contact">Contact</u>
                        <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: auto; Width: auto">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15495.39686619021!2d100.475284!3d13.848088!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd259ae6248bde850!2sDreg%20skatepark!5e0!3m2!1sth!2sth!4v1629392571909!5m2!1sth!2sth" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            RoadBang sri Mueang Bang Si Mueang Mueang Nonthaburi Nonthaburi 11000
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">083-541-3212</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">dregskateboard@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="{{url('/product/category/'.$category=8)}}">Deck</a></li>
                        <li><a class="text-decoration-none" href="{{url('/product/category/'.$category=14)}}">Shoes</a></li>
                        <li><a class="text-decoration-none" href="{{url('/product/category/'.$category=6)}}">T-Shirts</a></li>
                        <li><a class="text-decoration-none" href="{{url('/product/category/'.$category=7)}}">Complete-Skateboards</a></li>
                        <li><a class="text-decoration-none" href="{{url('/product/category/'.$category=9)}}">Trucks</a></li>
                        <li><a class="text-decoration-none" href="{{url('/product/category/'.$category=10)}}">Wheels</a></li>
                        <li><a class="text-decoration-none" href="{{url('/product/category/'.$category=11)}}">Grip Tape</a></li>
                        <li><a class="text-decoration-none" href="{{url('/product/category/'.$category=12)}}">Hardware</a></li>
                        <li><a class="text-decoration-none" href="{{url('/product/category/'.$category=13)}}">Accessories</a></li>
                        <li><a class="text-decoration-none" href="{{url('/product/category/'.$category=15)}}">Safety</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/DREGskateshop.Park/?ref=page_internal"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/dreg_shop/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">      
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="{{url('main/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{url('main/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{url('main/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{url('main/js/templatemo.js')}}"></script>
    <script src="{{url('main/js/custom.js')}}"></script>
    <!-- End Script -->
</body>

</html>
