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
                  <h4 class="card-title text-danger">Manage News</h4>
                      
                    <div class="form-group">
                    <a href="{{ url('/admin/news/create') }}" class="btn btn-primary btn-round">Create</a>
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
                          Header News
                        </th>
                        <th>
                          Content News
                        </th>
                        <th>
                          Image News
                        </th>
                        <th>
                          Created_at
                        </th>
                        <th>
                          Updated_at
                        </th>
                        <th>
                          action
                        </th>
                      </thead>
                      @foreach ($data as $key => $news)
                          <tr>
                              <td>{{$news->id_newinfo}}</td>
                              <td>{{$news->header_news}}</td>
                              <td>{{$news->content_news}}</td>
                              <td>
                                <img src="{{asset('admin/asset/img/news/'.$news->image_new)}}" alt="" style="width: 100px">
                              </td>
                              <td>{{$news->created_at}}</td>
                              <td>{{$news->updated_at}}</td>
                              <td>
                               <form action='{{url('admin/news/index','$news->id_newinfo')}}' method="post">
                                  <a href="{{url('/admin/news/edit/'.$news->id_newinfo)}}" class="btn btn-warning btn-round">Edit</a>
                                  {{csrf_field()}}
                                  <a href="{{url('/admin/news/delete/'.$news->id_newinfo)}}" class="btn btn-danger btn-round text-white">Delete</a>
                              </td> 
                            </tr>
                      @endforeach
                            
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    {{-- End Manage Category --}}