@extends('layouts.main.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Proflie') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <strong>Username: </strong>{{Auth::user()->username}}<br>
                    <strong>Name: </strong>{{Auth::user()->name}}
                    <strong>Last Name: </strong>{{Auth::user()->lastname}}<br>
                    <strong>Email: </strong>{{Auth::user()->email}}<br>
                    <strong>Phone: </strong>{{Auth::user()->phone}}<br>
                    <strong>Address: </strong>{{Auth::user()->address}}<br>
                    <a href="{{route('index')}}" class="btn btn-danger">Product Management</a>
                    <a href="" class="btn btn-success">Home</a>
                    <a href="" class="btn btn-warning text-white">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
