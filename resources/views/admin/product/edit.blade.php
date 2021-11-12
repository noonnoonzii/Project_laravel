@extends('layouts.admmin.admin')
@section('section')
<div class="content">
    <div class="card card-user">
        <div class="card-header">
        <h5 class="card-title text-danger">Edit product</h5>
        </div>
        <div class="contriner">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <img class="mr-3" src="../assets/img/logo.jpg" style="width: 90px;position: relative; " alt="Generic placeholder image">
                    <input type="file" class="form-control-file ml-3" id="exampleFormControlFile1">

                </div>
                <div class="col-lg-9">
                    <div class="col-md-3 px-1">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" placeholder="" value="">
                        </div>
                    </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <input type="email" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="email" class="form-control" placeholder="">
                            </div>
                                <button type="submit" class="btn btn-danger btn-round">Save</button>
                        </div>
                </div>
            </div>
        </div>
    </div>    
</div>