<?php

namespace App\Http\Controllers;
use App\Product;
use App\News;
use App\type_product;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $product = Product::count();
        $news = News::count();
        $categories = type_product::count();
        return view('admin.index',compact('product','news','categories'));
    }

}
