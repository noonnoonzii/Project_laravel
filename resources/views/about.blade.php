@extends('layouts.main.profile')

@section('content')

<section class="bg-light">
    <div class="container ">
        <div class="row pt-4 text-left">
            <h1 class="h1 text-danger text-left"><b>Profile</b></h1>
            <h2 class="h2 text-dark">Creater</h2>
            
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
               <div class="card card-user ">
                <div class="image">
                </div>
                <div class="card-body">
                  <div class="author">
                    <b class="underline">
                      <img class="avatar border-gray" src="{{asset('main/img/thanakorn.jpg')}}" alt="">
                      <h5 class="title">
                        Thanakorn
                        Rattanasawat
                      
                      </h5>
                    </b>
                    <p class="description">
                     BACK-END
                    </p>
                  </div>
                  <p class="description text-center">
                      <b>Contact</b><br>
                    FB: Thanakorn Rattanasawat  <br>
                    Phone: 092-960-9179
                    
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <div class="card card-user">
                    <div class="image">
                    </div>
                    <div class="card-body">
                      <div class="author">
                        <b class="underline">
                          <img class="avatar border-gray" src="{{asset('main/img/nattapong.jpg')}}" alt="">
                          <h5 class="title">
                            Nattapong
                            Kongpum
                          
                          </h5>
                        </b>
                        <p class="description">
                         FONT-END
                        </p>
                      </div>
                      <p class="description text-center">
                        <b>Contact</b><br>
                        FB: Nattapong Kongpum  <br>
                        Phone: 095-958-7108
                        
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                <div class="card card-user ">
                    <div class="image">
                    </div>
                    <div class="card-body">
                      <div class="author">
                        <b class="underline">
                          <img class="avatar border-gray" src="{{asset('main/img/jakkaphat.jpg')}}" alt="">
                          <h5 class="">
                            Chakkaphat
                            Chanamee
                          
                          </h5>
                        </b>
                        <p class="description">
                         TESTER
                        </p>
                      </div>
                      <p class="description text-center">
                        <b>Contact</b><br>
                        FB: Teamz Chakkaphat  <br>
                        Phone: 092-983-4304
                      </p>
                    </div>
                  </div>
            </div>
            </div>
            
        </div>
    </div>
    </section>   

@endsection


