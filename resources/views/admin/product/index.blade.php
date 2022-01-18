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
          </div>
        </nav>
        <!-- End Navbar -->
        <!-- Start Product manage -->
        <div class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-danger">Manage Product</h4>

                    <div class="form-group">
                    <a href="{{ url('/admin/product/create') }}" class="btn btn-primary btn-round">Create</a>
                    </div>
                    @if($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                </div>

                <div class="card-body">
                  <div class="table">
                    <table class="table">
                      <thead class="text-primary">
                        <th>
                            No.
                        </th>
                        <th>
                          Product Name
                        </th>
                        <th>
                          Brand
                        </th>
                        <th>
                          Image Product
                        </th>
                        <th>
                          Category
                        </th>
                        <th>
                          Price
                        </th>
                        <th>
                          Create_at
                        </th>
                        <th>
                          Update_at
                        </th>
                        <th>
                          action
                        </th>
                      </thead>
                      @foreach ($data as $product)
                            <tr>
                              <td>{{ $product->id_product }}</td>
                              <td>{{ $product->name_product }}</td>
                              <td>{{ $product->brand }}</td>
                              <td>
                                <img src="{{asset('admin/asset/img/product/'.$product->pic_product)}}" alt="" style="width: 100px">
                              </td>
                              <td>{{ $product->category->typeproduct_name }}</td>
                              <td>{{ $product->price }}</td>
                              <td>{{ $product->created_at}}</td>
                              <td>{{ $product->updated_at}}</td>
                              <td>
                               <form action='{{url('admin/product/index','$product->id_product')}}' method="post">
                                  <a href="{{ url('admin/product/edit/'.$product->id_product) }}" class="btn btn-warning btn-round">Edit</a>
                                  {{csrf_field()}}
                                  
                                  <a href="{{url('/admin/product/delete/'.$product->id_product)}}" class="btn btn-danger btn-round text-white">Delete</a>
                              </td> 
                            </tr>
                      @endforeach
                      <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          {{ $data->links() }}
                        </ul>
                      </nav>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      
    {{-- End Manage Category --}}
