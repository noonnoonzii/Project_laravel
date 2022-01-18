@extends('layouts.main.index')

@section('content')

        <!-- Start Content -->
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="list-unstyled templatemo-accordion">
                        <li class="pb-3">
                            <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                                <h1 class="h2 pb-4">Categories</h1>
                                <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                            </a>
                            <ul class="collapse show list-unstyled pl-3">
                                @foreach ($findCategory as $categories)
                                    <li><a class="text-decoration-none" href="{{url('/product/category/'.$categories->id_typeproduct)}}">{{$categories->typeproduct_name}}</a></li>
                                @endforeach
                                
                            </ul>
                        </li>
                    </ul>
                </div>

    
        <div class="col-lg-9">
                    <div class="row">
                        @if (count($product)>0)
                            @foreach ($product as $shop)
                            <div class="col-md-4">
                                <div class="card mb-4 product-wap rounded-0">
                                    <div class="card rounded-0">
                                        <img class="card-img rounded-0 img-fluid" src="{{asset('admin/asset/img/product/'.$shop->pic_product)}}" 
                                        style="border: 1px solid #ddd;
                                        border-radius: 2px;
                                        padding: 8px;
                                        width:415px;
                                        height:300px;
                                        object-fit: contain;">
                                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                            <ul class="list-unstyled">
                                                <li><a class="btn btn-success text-white mt-2" href="{{url('shop-single/'.$shop->id_product)}}"><i class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="{{url('shop-single/'.$shop->id_product)}}" class="h3 text-decoration-none"><b>{{$shop->name_product}}</b></a>
                                        <p class="text-center mb-0">Price {{ $shop->price }} bath</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                {{ $product->Links() }}
                            </ul>
                        </nav>
                        @else
                        <p>No Page Found</p>
                        @endif
                        

                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
@endsection