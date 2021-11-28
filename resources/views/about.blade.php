@extends('layouts.main.index')

@section('content')

<section class="bg-light">
    <div class="container py-5 ">
        <div class="row pt-4 text-left">
            <h1 class="h1 text-danger text-left"><b>Profile</b></h1>
            <h2 class="h2 text-dark">Creater</h2>
            
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <div class="card" style="width: 25rem;">
                    <img src="./assets/img/thanakorn.jpg">
                <div class="card-body bg-black">
                    <b class="card-text text-white text-center">Mr. Thanakorn Rattanasawat</b><br>
                    <b class="card-text text-white">Education: Pongsawadi technological college</b>
                    <b class="card-text text-white">Program: Information technology</b><br>
                    <b class="card-text text-white">Position: Back End</b>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <div class="card" style="width: 25rem;">
                    <img src="./assets/img/nattapong.jpg" class="card-img-top">
                    <div class="card-body bg-black">
                    <b class="card-text text-white text-center">Mr. Nattapong Kongpum</b><br>
                    <b class="card-text text-white">Education: Pongsawadi technological college</b>
                    <b class="card-text text-white">Program: Information technology</b><br>
                    <b class="card-text text-white">Posttion: Front End</b>
                    
                </div>
                </div>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <div class="card" style="width: 25rem;">
                    <img src="./assets/img/jakkaphat.jpg" class="card-img-top">
                    <div class="card-body bg-black">
                    <b class="card-text text-white text-center">Mr. Jakkapat Chanamee</b><br>
                    <b class="card-text text-white">Education: Pongsawadi technological college</b>
                    <b class="card-text text-white">Program: Information technology</b><br>
                    <b class="card-text text-white">Position: Tester</b>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>   

@endsection


