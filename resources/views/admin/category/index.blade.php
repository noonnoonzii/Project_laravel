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
    {{-- End nav bar --}}

    {{-- Start Manage Category --}}
    <div class="content">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title text-danger">Manage Category</h4>
                      
                    <div class="form-group">
                    <a href="{{ url('/admin/category/create') }}" class="btn btn-primary btn-round">Create</a>
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
                          Category Name
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
                      
                        @foreach ($data as $key => $category_id)
                            <tr>
                              <td>{{ $category_id->typeproduct_name }}</td>
                              <td>{{ $category_id->created_at }}</td>
                              <td>{{ $category_id->updated_at }}</td>
                              <td>
                               <form action='{{ url('admin.category.index','$category_id->id_typeproduct') }}' method="post">
                                  <a href="{{ url('admin/category/edit/'.$category_id->id_typeproduct) }}" class="btn btn-warning btn-round">Edit</a>
                                  @csrf
                                  
                                  <a href="{{url('/admin/category/delete/'.$category_id->id_typeproduct)}}" class="btn btn-danger btn-round text-white">Delete</a>
                              </td> 
                            </tr>
                        @endforeach
                    </table>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        {{ $data->links() }}
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      
    {{-- End Manage Category --}}


