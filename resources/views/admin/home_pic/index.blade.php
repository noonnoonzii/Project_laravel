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
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title text-danger"> Change Picture Slide </h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <img src="../assets/img/park.jpg">
                    </div>
                    <div class="col-sm">
                      <img src="../assets/img/damir-bosnjak.jpg">
                    </div>
                    <div class="col-sm">
                      <img src="../assets/img/jan-sendereks.jpg">
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row text-center">
                      <div class="update ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary btn-round">SAVE</button>
                      </div>
                    </div>
                </div>
                <div class="content">
      <div class="row">
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
                      Create_at
                    </th>
                    <th>
                      Update_at
                    </th>
                    <th class="text-center">
                      Edit
                    </th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        park.jpg
                      </td>
                      <td>
                        
                      </td>
                      <td>
                      
                      </td>
                      <td class="text-center">
                        <input type="file" class="custom-file-upload btn-round btn btn-warning text-white" id="exampleFormControlFile1">
                        <button type="submit" class="btn btn-danger btn-round">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                      damir-bosnjak.jpg
                      </td>
                      <td>
                        
                      </td>
                      <td>
                        
                      </td>
                      <td class="text-center">
                        <input type="file" class="custom-file-upload btn-round btn btn-warning text-white" id="exampleFormControlFile1">
                        <button type="submit" class="btn btn-danger btn-round">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                      jan-sendereks.jpg
                      </td>
                      <td>
                        
                      </td>
                      <td>
                        
                      </td>
                      <td class="text-center">
                        <input type="file" class="custom-file-upload btn-round btn btn-warning text-white" id="exampleFormControlFile1">
                        <button type="submit" class="btn btn-danger btn-round">Delete</button>
                    </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
