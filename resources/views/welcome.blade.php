@extends('layouts.main.index')

@section('content')

    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{url('/main/img/park.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{url('/main/img/park2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{url('/main/img/product_1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left text-danger"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="bg-black">
    <div class="container py-5 ">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
            <h1 class="h1 text-danger"><b>Category Product</b></h1>
                <p class="h3 text-white">
                    Category Product Hit !!!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{url('/main/img/product_1.jpg')}}" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3 text-white">Skate</h5>
                <p class="text-center"><a class="btn btn-danger">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{url('/main/img/product/Safety/safe_1.jpg')}}" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3 text-white">Safety</h2>
                <p class="text-center"><a class="btn btn-danger">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{url('/main/img/product/fashion/shirt/shirt_1.jpg')}}" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3 text-white">Fashion</h2>
                <p class="text-center"><a class="btn btn-danger">Go Shop</a></p>
            </div>
        </div>
    </div>
    </section>
    <!-- End Categories of The Month -->

    <!-- Start Product New -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row py-3">
                <div class="col-lg-6 ">
                    <h1 class="h1 text-danger"><b>New Product</b></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <a href="#">
                            <img src="./main/img/product/skate/complete_skate/baker_set1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body bg-light">                        
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Baker Set Black</a>
                            <p class="card-text text-dark">
                                <b>
                                Price 1,600 baht
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <a href="shop-single.html">
                            <img src="./main/img/product/skate/complete_skate/creature_set1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body bg-light">
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Creature Set</a>
                            <p class="card-text text-dark">
                                <b>
                                    price 2,600 Baht

                                </b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <a href="shop-single.html">
                            <img src="./main/img/product/skate/complete_skate/simon_bannerot.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body bg-light">
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Simon Banerot Set</a>
                            <p class="card-text text-dark">
                                <b>
                                    price 3,600 Baht

                                </b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <a href="shop-single.html">
                            <img src="./main/img/product/skate/complete_skate/enjoi_1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body bg-light">
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark"> Deck Enjoi</a>
                            <p class="card-text text-dark">
                                <b>
                                    price 2,400 Baht

                                </b>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- End Product New -->
   <section class="bg-light">
   <div class="container bg-light">
        <div class="row bg-light text-center">
                <hr>
    </div>
    </section>


    <!-- Start Product Hit -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row py-3">
                <div class="col-lg-6 ">
                    <h1 class="h1 text-danger"><b>Product Hit</b></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <a href="#">
                            <img src="./main/img/product/skate/decks/baker_1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body bg-light">                        
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Baker Deck</a>
                            <p class="card-text text-dark">
                                <b>
                                Price 2,600 baht
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <a href="shop-single.html">
                            <img src="./main/img/product/skate/decks/dreg_deck_1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body bg-light">
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Dreg Deck Red </a>
                            <p class="card-text text-dark">
                                <b>
                                    price 1,500 Baht

                                </b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <a href="shop-single.html">
                            <img src="./main/img/product/hardware/bones_speedcream.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body bg-light">
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Bones Speed Cream </a>
                            <p class="card-text text-dark">
                                <b>
                                    price 650 Baht

                                </b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <a href="shop-single.html">
                            <img src="./main/img/product/skate/bearing/swiss_flash.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body bg-light">
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">FKD Swiss flash Bearing </a>
                            <p class="card-text text-dark">
                                <b>
                                    price 1,600 Baht

                                </b>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Product Hit-->


    <!-- Start News -->
    <section class="bg-black">
        <div class="container py-5">
            <div class="row py-3">
                <div class="col-lg-6 ">
                    <h1 class="h1 text-danger"><b>News</b></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./main/img/new/new1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body bg-white">                        
                            <p href="shop-single.html" class="h2 text-decoration-none text-black">Discount All Product 10%</p>
                            <p class="card-text text-black">
                                Happy go skateborad day We would like to give Promotion 10% discount on all products sold everywhere in online stores and stores.
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./main/img/new/new2.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body bg-white">
                            <p href="shop-single.html" class="h2 text-decoration-none text-black">Special offer for lockdown</p>
                            <p class="card-text text-black">
                                Dreg Skate shop offers a Promotion 10% Discount on all Product sold for Lockdown.
                            </p>
                            <p class="text-muted">Reviews (52)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./main/img/new/new3.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body bg-white">
                            <p href="shop-single.html" class="h2 text-decoration-none text-black">Sign up for free, Get a DG Blackcard</p>
                            <p class="card-text text-black">
                                Sing up for free, get a DG Blackcard jusy by Scanning the QR code, Every 100 Baht equal to 1 Point, 100 Point equal to 200 Baht.
                            </p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News -->

    <!-- Strat Preview -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row py">
                <h2 class="h2 text-danger border-bottom pb-3 border-light logo">Dreg Skate Shop Preview</h2>
            
                <div class="card-group">
                    <div class="card">
                        <img src="./main/img/view/shop1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="./main/img/view/shop4.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="./main/img/view/shop2.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="./main/img/view/shop3.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card-group">
                    <div class="card">
                        <img src="./main/img/view/view1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="./main/img/view/view2.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="./main/img/view/view3.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="./main/img/view/view4.jpg" class="card-img-top" alt="...">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Preview-->

    <!-- Start Review -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row py">
                <h2 class="h2 text-danger border-bottom pb-3 border-light logo">Dreg Skate Shop Review</h2>
            
                <div class="card-group">
                    <div class="card">
                        <img src="./main/img/review/review_1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="./main/img/review/review_2.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="./main/img/review/review_3.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="./main/img/review/review_4.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card-group">
                    <div class="card">
                        <img src="./main/img/review/review_5.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="./main/img/review/review_6.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="./main/img/review/review_7.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                        <img src="./main/img/review/review_8.jpg" class="card-img-top" alt="...">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Review -->

@endsection
   

