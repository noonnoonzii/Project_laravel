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


