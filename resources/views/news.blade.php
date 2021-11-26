@extends('layouts.main.index');
@section('content');

<section class="bg-light">
    <div class="container py-5">
        <div class="row py-3">
            <div class="col-lg-6 ">
                <h1 class="h1 text-black"><b>News</b></h1>
            </div>
        </div>
        <div class="card h-100">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="./assets/img/new/new1.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title">Discount All Product 10%</h4>
                        <h5 class="card-title">Happy go skate Day !!!</h5>
                        <p class="card-text">Happy go skateborad day We would like to give Promotion 10% discount on all products sold everywhere in online stores and stores.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card h-100">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="./assets/img/new/new2.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title text-danger">Hot Promotion !!!</h4>
                        <h5 class="card-title">Special offer for lockdown</h5>
                        <p class="card-text">Dreg Skate shop offers a Promotion 10% Discount on all Product for Lockdown sold everywhere in online stores and stores.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 Day ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card h-100">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="./assets/img/new/new3.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title">Sign up for free, Get a DG Blackcard</h4>
                        <p class="card-text">Sing up for free, get a DG Blackcard jusy by Scanning the QR code, Every 100 Baht equal to 1 Point, 100 Point equal to 200 Baht.</p>
                        <p class="card-text"><small class="text-muted">Last updated 1 Week ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card h-100">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="./assets/img/new/new4.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title">2 Days only Sale !!! 15% </h4>
                        <p class="card-text">2 Day only Promotion for work from home for product in brand Sant Cruz, Creature OJ Wheels, Ricta, slimball and Independent Trucks only sale now 15%.</p>
                        <p class="card-text"><small class="text-muted">Last updated 1 Week ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection
