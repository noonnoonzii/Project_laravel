@extends('layouts.main.profile')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"style="margin-top: 20px"> 
                <div class="card-body">
                    <div class="card-header bg-white" style="border-radius: 0px">
                        
                        <h2>
                            <a href="/" class="btn btn-white"><i class="fas fa-chevron-left fa-2x"></i></a>
                            
                            {{Auth::User()->username}}
                        </h2>
                        
                    </div>
                    <div class="card card-user">
                        <div class="image">
                          <img src="{{asset('admin/asset/img/users/cover/'.Auth::user()->cover_image)}}" alt="...">
                        </div>
                        <div class="card-body">
                            <ul  class="edit-button">
                                <a data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-outline-dark ">Edit Profile</a>
                                <!-- start popup model Edit profile -->
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <form action="{{url('/admin/users/update',[ Auth::user()->id ])}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Profile</h5>
                                        <button type="button" class="close-button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="card-user">
                                        <div class="image">
                                            <img src="{{asset('admin/asset/img/users/cover/'.Auth::user()->cover_image)}}" alt="..." id="showCover">
                                        </div>
                                        <div class="card-body">
                                          <div class="author">
                                            <a href="#">
                                              <img class="avatar border-gray" src="{{asset('admin/asset/img/users/profile/'.Auth::user()->image_profile)}}" alt="" id="showProfile">
                                            </a>
                                            <h5 class="edit-username">
                                              {{ Auth::user()->username }}
                                            </h5>
                                          </div>
                                            <div class="row" style="text-align: left">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label class="edit-lable">First Name</label>
                                                  <input type="text" name="name" class="form-control" placeholder="First Name" value="{{ Auth::user()->name }}">
                                                </div>
                                              </div>
                                              <div class="col-md-6 ">
                                                <div class="form-group">
                                                  <label>Last Name</label>
                                                  <input type="text" name="lname" class="form-control" placeholder="Last Name" value="{{ Auth::user()->lastname }}">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="text-align: left">
                                              <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Email address</label>
                                                  <input type="email" name="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}">
                                                </div>
                                              </div>
                                              <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Phone</label>
                                                  <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ Auth::user()->phone }}">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="text-align: left">
                                              <div class="col-md-12 ">
                                                <div class="form-group">
                                                  <label>Address</label>
                                                  <textarea type="text" name="address" class="form-control textarea" placeholder="Address">{{ Auth::user()->address }}</textarea>
                                                </div>
                                              </div>
                                            </div>
                                          
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <div class="upload">
                                          <button type="button" class=" btn btn-warning">
                                            Edit Profile Picture
                                            <input type="file" class="hidden" name="profile" id="profile">
                                          </button>
                                          <button type="button" class=" btn btn-warning">
                                            Edit Cover Photo 
                                            <input type="file" class="hidden" name="cover" id="cover">
                                          </button>
                                        </div>
                                        <button type="submit" class="btn btn-danger">Save changes</button>
                                      </div>
                                      </form>
                                      
                                    </div>
                                  </div>
                                </div>
                                {{-- End Modal --}}
                            </ul>
                          <div class="author">
                               
                            <a href="#">
                              <img class="avatar border-gray" src="{{asset('admin/asset/img/users/profile/'.Auth::user()->image_profile)}}" alt="">
                               
                            </a>

                            <h4 class="title">
                                {{ Auth::user()->username }}
                            </h4>
                            <strong>Name: </strong>{{Auth::user()->name}}
                            <strong>Lastname: </strong>{{Auth::user()->lastname}}<br>
                            <strong>Email: </strong>{{Auth::user()->email}}<br>
                            <strong>Phone: </strong>{{Auth::user()->phone}}<br>
                            <strong>Address: </strong>{{Auth::user()->address}}<br>
                        </div>
                      </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    .
                    @if (Auth::user()->check())
                        <a href="{{route('index')}}" class="btn btn-danger btn-rounded">Product Management</a>
                    @endif
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
      $('#profile').change(function(e){
          var reader = new FileReader();
          reader.onload = function(e){
              $('#showProfile').attr('src',e.target.result);
          }
          reader.readAsDataURL(e.target.files['0']);
      });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
      $('#cover').change(function(e){
          var reader = new FileReader();
          reader.onload = function(e){
              $('#showCover').attr('src',e.target.result);
          }
          reader.readAsDataURL(e.target.files['0']);
      });
  });
</script>
@endsection
