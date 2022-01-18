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
          <a class="navbar-brand" href="javascript:;">News</a>
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