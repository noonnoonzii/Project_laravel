@extends('layouts.admin.admin')
@section('content')
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <div class="navbar-toggle">
            <button type="button" class="navbar-toggler">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <a class="navbar-brand" href="javascript:;">Paper Dashboard 2</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <form>
            <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search...">
              <div class="input-group-append">
                <div class="input-group-text">
                  <i class="nc-icon nc-zoom-split"></i>
                </div>
              </div>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link btn-magnify" href="javascript:;">
                <i class="nc-icon nc-layout-11"></i>
                <p>
                  <span class="d-lg-none d-md-block">Stats</span>
                </p>
              </a>
            </li>
            <li class="nav-item btn-rotate dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="nc-icon nc-bell-55"></i>
                <p>
                  <span class="d-lg-none d-md-block">Some Actions</span>
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-rotate" href="javascript:;">
                <i class="nc-icon nc-settings-gear-65"></i>
                <p>
                  <span class="d-lg-none d-md-block">Account</span>
                </p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    
    <div class="content">
      <div class="row">
        <!-- Start Profile -->
        <div class="col-md-4">
          <div class="card card-user">
            <div class="image">
              <img src="../../assets/img/damir-bosnjak.jpg" alt="...">
            </div>
            <div class="card-body">
              <div class="author">
                <a href="#">
                  <img class="avatar border-gray" src="../../../assets/img/logo.jpg" alt="">
                  <h5 class="title">
                    {{ Auth::user()->name }}
                    {{ Auth::user()->lastname }}
                  
                  </h5>
                </a>
                <p class="description">
                 @.{{ Auth::user()->username }}
                </p>
              </div>
              <p class="description text-center">
                "That our Queendom"  <br>
                
              </p>
            </div>
          </div>
        </div>
        <!-- Edit Profile-->
        <div class="col-md-8">
          <div class="card card-user">
            <div class="card-header">
              <h3 class="card-title text-danger">Edit Profile</h3>
            </div>
            <div class="card-body">
             <!-- foreach ($data as $key => $users)
                  <form action="url('/admin/users/update')">
                csrf-->
                <div class="row">
                    <div class="image">
                      <img src="{{asset('admin/asset/img/park.jpg')}}" alt="...">
                    </div>
                    <div class="card-body">
                      <div class="author">
                        <a href="#">
                          <img class="avatar border-gray" src="{{asset('admin/asset/img/logo.jpg')}}" alt="">
                          <h5 class="title">
                            {{ Auth::user()->name }}
                            {{ Auth::user()->lastname }}
                          
                          </h5>
                        </a>
                        <p class="description">
                         @.{{ Auth::user()->username }}
                        </p>
                      </div>
                      <p class="description text-center">
                        "That our Queendom"  <br>
                        
                      </p>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-3 pr-1">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="username" class="form-control"   value="{{ Auth::user()->username }}"/>
                    </div>
                  </div>
                  <div class="col-md-4 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}">
                    </div>
                  </div>
                  <div class="col-md-4 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone</label>
                      <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ Auth::user()->phone }}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" name="name" class="form-control" placeholder="First Name" value="{{ Auth::user()->name }}">
                    </div>
                  </div>
                  <div class="col-md-6 ">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" name="lname" class="form-control" placeholder="Last Name" value="{{ Auth::user()->lastname }}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 ">
                    <div class="form-group">
                      <label>Address</label>
                      <textarea type="text" name="address" class="form-control textarea" placeholder="Address">{{ Auth::user()->address }}</textarea>
                    </div>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>About Me</label>
                      <textarea class="form-control textarea">Hello i'm Reveluv&Flover</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                  </div>
                </div>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>

