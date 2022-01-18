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
          <a class="navbar-brand" href="javascript:;">News</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title text-danger">Edit News</h5>
            <a class="btn btn-primary btn-round" type="submit" href="{{url('admin/news/index')}}">Back</a>
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
                      <textarea type="text" name="content" class="form-control textarea">{{$news->content_news}}</textarea>
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