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
          <a class="navbar-brand" href="javascript:;">Category</a>
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
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title text-danger">Add new category</h4>
              <a href="{{ route('category') }}" class="btn btn-primary btn-round">Back</a>
            </div>
            <div class="card-body">
              <div class="table">
                <form action="{{route('create.category')}}" method="post">
                  @csrf
                  <div class="form-group">
                    <p>Category Name</p>
                    <input type="text" name="name" class="form-control">
                  </div> 
                   <button type="submit" class="btn btn-success btn-round">save</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


