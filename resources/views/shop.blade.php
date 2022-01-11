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
                        @foreach ($category as $categories)
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
                        <h3 class="h4 text-black"><b>Decks</b></h3>
                        <div class="card-group">
                            @foreach ($deck as $product)
                                <div class="card">
                                    <img src="{{asset('admin/asset/img/product/'.$product->pic_product)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name_product }}</h5>
                                        <p class="card-text">Price {{ $product->price }} bath</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">{{ $product->updated_at}}</small>
                                    </div>
                                </div>
                                @endforeach
                        </div>  
                    </div>
                    
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Shoes</b></h3>
                        <div class="card-group">
                            @foreach ($shoes as $product)
                                <div class="card">
                                    <img src="{{asset('admin/asset/img/product/'.$product->pic_product)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name_product }}</h5>
                                        <p class="card-text">Price {{ $product->price }} bath</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">{{ $product->updated_at}}</small>
                                    </div>
                                </div>
                                @endforeach
                        </div>  
                    </div>
                                        
                    <div class="row py-3">                    
                        <h3 class="h4 text-black"><b>T-Shirts</b></h3>
                            <div class="card-group">
                                @foreach ($shirt as $product)
                                <div class="card">
                                    <img src="{{asset('admin/asset/img/product/'.$product->pic_product)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name_product }}</h5>
                                        <p class="card-text">Price {{ $product->price }} bath</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">{{ $product->updated_at}}</small>
                                    </div>
                                </div>
                                @endforeach
                            </div>     
                    </div>
                                                            
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Complete Skateborad</b></h3>
                        <div class="card-group">
                            @foreach ($CPskate as $product)
                                <div class="card">
                                    <img src="{{asset('admin/asset/img/product/'.$product->pic_product)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name_product }}</h5>
                                        <p class="card-text">Price {{ $product->price }} bath</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">{{ $product->updated_at}}</small>
                                    </div>
                                </div>
                                @endforeach
                        </div>  
                    </div>

                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Safety</b></h3>
                        <div class="card-group">
                            @foreach ($safety as $product)
                                <div class="card">
                                    <img src="{{asset('admin/asset/img/product/'.$product->pic_product)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name_product }}</h5>
                                        <p class="card-text">Price {{ $product->price }} bath</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">{{ $product->updated_at}}</small>
                                    </div>
                                </div>
                                @endforeach
                        </div>  
                    </div>
                                                            
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Trucks</b></h3>
                        <div class="card-group">
                            @foreach ($truck as $product)
                                <div class="card">
                                    <img src="{{asset('admin/asset/img/product/'.$product->pic_product)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name_product }}</h5>
                                        <p class="card-text">Price {{ $product->price }} bath</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">{{ $product->updated_at}}</small>
                                    </div>
                                </div>
                                @endforeach
                        </div>  
                    </div>
                                                            
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Wheels</b></h3>
                        <div class="card-group">
                            @foreach ($wheels as $product)
                                <div class="card">
                                    <img src="{{asset('admin/asset/img/product/'.$product->pic_product)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name_product }}</h5>
                                        <p class="card-text">Price {{ $product->price }} bath</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">{{ $product->updated_at}}</small>
                                    </div>
                                </div>
                                @endforeach
                        </div>  
                    </div>
                                                            
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Bearings</b></h3>
                        <div class="card-group">
                            @foreach ($bearing as $product)
                                <div class="card">
                                    <img src="{{asset('admin/asset/img/product/'.$product->pic_product)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name_product }}</h5>
                                        <p class="card-text">Price {{ $product->price }} bath</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">{{ $product->updated_at}}</small>
                                    </div>
                                </div>
                                @endforeach
                        </div>  
                    </div>
                                                            
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Grip Tape</b></h3>
                        <div class="card-group">
                            @foreach ($gripTape as $product)
                                <div class="card">
                                    <img src="{{asset('admin/asset/img/product/'.$product->pic_product)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name_product }}</h5>
                                        <p class="card-text">Price {{ $product->price }} bath</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">{{ $product->updated_at}}</small>
                                    </div>
                                </div>
                                @endforeach
                        </div>  
                    </div>
                                                            
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>hardware</b></h3>
                        <div class="card-group">
                            @foreach ($hardware as $product)
                                <div class="card">
                                    <img src="{{asset('admin/asset/img/product/'.$product->pic_product)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name_product }}</h5>
                                        <p class="card-text">Price {{ $product->price }} bath</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">{{ $product->updated_at}}</small>
                                    </div>
                                </div>
                                @endforeach
                        </div>  
                    </div>
                                                            
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Accessories</b></h3>
                        <div class="card-group">
                            @foreach ($accessories as $product)
                                <div class="card">
                                    <img src="{{asset('admin/asset/img/product/'.$product->pic_product)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name_product }}</h5>
                                        <p class="card-text">Price {{ $product->price }} bath</p>
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