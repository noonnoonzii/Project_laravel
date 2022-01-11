@extends('layouts.main.index')

@section('content')
    <!-- Start Side Bar -->
    <section class="bg-white">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-4">
                    <h3 class="h2 text-black"><b>Category</b></h3>
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                        @foreach ($findCategory as $categories)
                            <a href="{{url('/product/category/'.$categories->id_typeproduct)}}" class="list-group-item list-group-item-action">{{$categories->typeproduct_name}}</a>
                        @endforeach
                            
                            
                        </ul>
                    </div>
                </div>
    <!-- End side bar-->

    <!-- Start Shop -->
                <div class="col-md-8 ">
                <h1 class="h2 text-black text-center"><b>Product</b></h1>
                            <div class="row py-3">                                                    
                                <div class="card-group">
                                    @foreach ($product as $product) 
                                    <div class="card">
                                        <img src="{{asset('admin/asset/img/product/'.$product->pic_product)}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product->name_product }}</h5>
                                            <p class="card-text text-center">Price {{ $product->price }} bath.</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">{{ $product->updated_at}}</small>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>  
                            </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop -->
@endsection