@extends('layouts.main.index')
@section('content')
<section class="bg-light">
    <div class="container py-5">
        <div class="row py-3">
            <div class="col-lg-6 ">
                <h1 class="h1 text-black"><b>News</b></h1>
            </div>
        </div>
        @foreach ($news as $news)
          <div class="card h-100">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{asset('admin/asset/img/news/'.$news->image_new)}}" class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title">{{$news->header_news}}</h4>
                        <p class="card-text">{{$news->content_news}}</p>
                        <p class="card-text"><small class="text-muted">{{$news->updated_at}}</small></p>
                    </div>
                </div>
            </div>
        </div>  
        @endforeach
        
    </div>
</section>
    
@endsection
