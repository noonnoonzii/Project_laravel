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
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title text-danger">Edit News</h5>
            <a class="btn btn-primary btn-round" type="submit" href="{{route('news')}}">Back</a>
          </div>
      <form action="{{url('/admin/news/update/'.$news->id_newinfo)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="crad-body">
          <div class="table">
            <div class="row justify-content-start">
              <div class="col-3 text-center">
                <div class="table">
                  <img src="{{asset('admin/asset/img/news/'.$news->image_new)}}" class="mb-4" id="showImage" alt="" style="width: 200px">
                  <input type="file" name="image" class="form-control-file ml-3 text-center" id="image">
                </div>
              </div>

              <div class="col-9">
                  <div class="form-group">
                    <div class="table">
                      <label for="exampleInputEmail1">Header News</label>
                      <input type="text" name="head" class="form-control" id="exampleInputEmail1" value="{{$news->header_news}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="table">
                      <label for="exampleInputPassword1">Content News</label>
                      <input type="text" name="content" class="form-control" value="{{$news->content_news}}">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-danger btn-round">Save</button>
              </div>
            </div>
          </div>
        </div>
      </form>
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