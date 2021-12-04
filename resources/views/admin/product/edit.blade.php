@extends('layouts.admin.admin')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            <!--End nav bar -->
            <div class="content">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title text-danger">Add new product</h4>
                      <a href="{{ route('product') }}" class="btn btn-primary btn-round">Back</a>
                    </div>
                    <div class="card-body">
                      <div class="table">
                        <form action="{{url('/admin/product/update/'.$product->id_product)}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="name" class="form-control" value="{{$product->name_product}}">
                          </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <select class="custom-select" name="category">
                                  <option selected value="{{$product->id_typeproduct}}">{{$product->category->typeproduct_name}}</option>
                              @foreach ($category as $categories)
                                  <option value="{{$categories->id_typeproduct}}">
                                    {{$categories->typeproduct_name}}
                                  </option>
                              @endforeach
                              
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" name="price" class="form-control" placeholder="price" mane="price" value="{{$product->price}}">
                            </div>
                            <div class="form-group">
                              <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" name="image" class="custom-file-input" id="image">
                                  <label class="custom-file-label" for="image">Choose file</label>                                 
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                                <img src="{{asset('admin/asset/img/product/'.$product->pic_product)}}" id="showImage" alt="" style="width: 200px">
                            </div>
                            
                           <button type="submit" class="btn btn-success btn-round">save</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#image').change(function(e){
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('#showImage').attr('src',e.target.result);
                        }
                        reader.readAsDataURL(e.target.files['0']);
                    });
                });
            </script>