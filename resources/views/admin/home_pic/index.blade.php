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
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title text-danger"> Change Picture Slide </h4>
            </div>
            <div class="card-body">
              <form action="{{route('create.homepic')}}" method="POST" enctype="multipart/form-data">
                 <div class="table">
                <div class="container">
                  <div class="row">
                    <!--Start Edit-->
                          <div class="col text-center">
                              <img id="showImage" src="{{asset('admin/asset/img/')}}" style="width: 100px" class="rounded mx-auto d-blockcenter">
                          </div>
                  </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input btn btn-round btn-warning text-white" id="image">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>

                  <div class="card-body">
                    <div class="row text-center">
                      <div class="update ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary btn-round">SAVE</button>
                      </div>
                    </div>
                </div>
                  <!--end Edit-->

                  <!--Start Show-->
                <div class="content">
                  <div div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Manage Picture</h4>
                        </div>
                        <div class="card-body">
                          <div class="table">
                            <table class="table">
                              <thead class=" text-primary">
                                <th>
                                  Name
                                </th>
                                <th>
                                  Created_at
                                </th>
                                <th>
                                  Updated_at
                                </th>
                                <th class="text-center">
                                  Delete
                                </th>
                              </thead>
                              <tbody>
                                @foreach ($data as $key => $homepic)
                                    <tr>
                                  <td>
                                    {{$homepic->image_homepic}}
                                  </td>
                                  <td>
                                    {{$homepic->created_at}}
                                  </td>
                                  <td>
                                    {{$homepic->updated_at}}
                                  </td>
                                  <td class="text-center">
                                    <input type="file" class="custom-file-upload btn-round btn btn-warning text-white" id="exampleFormControlFile1">
                                    <button type="submit" class="btn btn-danger btn-round">Delete</button>
                                  </td>
                                </tr> 
                                @endforeach
                                  
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                      <!--End show-->
                  </div>
              </div>
            </div>
            </div>
              </form> 
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
    
    
    
