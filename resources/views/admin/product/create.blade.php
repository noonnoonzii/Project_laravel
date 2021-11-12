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
                  <a class="navbar-brand" href="javascript:;">Product</a>
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

            <div class="content">
                <div class="card card-user">
                    <div class="card-header">
                    <h5 class="card-title text-danger">Edit product</h5>
                    </div>
                    <div class="contriner">
                        <div class="row">
                            <div class="col-lg-3 text-center">
                                <img class="mr-3" src="#" style="width: 90px;position: relative; " alt="Generic placeholder image">
                                <input type="file" class="form-control-file ml-3" id="exampleFormControlFile1">
            
                            </div>
                            <div class="col-lg-9">
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" placeholder="" value="">
                                    </div>
                                </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category</label>
                                            <input type="email" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Price</label>
                                            <input type="email" class="form-control" placeholder="">
                                        </div>
                                            <button type="submit" class="btn btn-danger btn-round">Save</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>