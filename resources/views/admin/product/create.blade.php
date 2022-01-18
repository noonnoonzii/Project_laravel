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
                        <form action="{{route('create.product')}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Product name">
                          </div>
                          <div class="form-group">
                            <label>Brand</label>
                            <input type="text" name="brand" class="form-control" placeholder="Brand">
                          </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <select class="custom-select" name="category">
                                  <option selected>Open this select Category</option>
                                  @foreach ($category as $categories)
                                      <option value="{{$categories->id_typeproduct}}">
                                        {{$categories->typeproduct_name}}
                                      </option>
                                  @endforeach
                                  
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" name="price" class="form-control" placeholder="price" mane="price">
                            </div>
                            <div class="form-group">
                              <label>Description</label>
                              <textarea class="form-control" aria-label="With textarea" name="description" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                              <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" name="image" class="custom-file-input" id="image">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                              </div>
                            </div>
                           <button type="submit" class="btn btn-success btn-round">save</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
