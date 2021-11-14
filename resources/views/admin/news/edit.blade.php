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
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title text-danger">Edit News</h5>
            <a class="btn btn-primary btn-round" type="submit" href="{{route('news')}}">Back</a>
          </div>
      <form>
          <div class="row">
            <div class="col-3">
              <img class="mr-3" src="../assets/img/logo.jpg" style="width: 50%;position: relative; " alt="Generic placeholder image">
              <input type="file" class="form-control-file ml-3" id="exampleFormControlFile1">

            </div>

            <div class="col-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Header News</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Content News</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
      
                <button type="submit" class="btn btn-danger btn-round">Save</button>
              </form>
            </div>
          </form>

            </div>
              <!-- <div class="media-body">
                <label class="text-dark"><b>หัวข้อข่าวสาร</b></label>
                <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">

                <label class="text-dark"><b>เนื้อหาข่าวใหม่</b></label>
                <input type="text"  class="form-control" placeholder="Home Address" value="Melbourne, Australia">
              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-danger btn-round">บันทึก</button>
                </div>
              </div>
        </div> -->
      </div>


</div>