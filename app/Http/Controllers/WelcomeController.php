<?php

namespace App\Http\Controllers;
use App\News;
Use App\Product;
Use App\type_product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function welcome(){
        $hot = Product::latest()->paginate(3);    
        $news = News::latest()->paginate(3);
        return view('welcome',compact('news','hot'));
    }
    public function linkcategory($id_typeproduct){
        $category = type_product::all($id_typeproduct);
        return view('findproduct')
                -with('category',type_product::all()->sortby('name'));
    }
    public function index()
    {
        return view('home');
    }
    public function shop(){
        $category = type_product::all();
        $product = Product::latest()->paginate(9);
        $shirt = Product::where('id_typeproduct','=',6)->get();
        $bearing = Product::where('id_typeproduct','=',2)->get();
        $tape = Product::where('id_typeproduct','=',3)->get();
        $CPskate = Product::where('id_typeproduct','=',7)->get();
        $deck = Product::where('id_typeproduct','=',8)->get();
        $truck = Product::where('id_typeproduct','=',9)->get();
        $wheels = Product::where('id_typeproduct','=',10)->get();
        $gripTape = Product::where('id_typeproduct','=',11)->get();
        $hardware = Product::where('id_typeproduct','=',12)->get();
        $accessories = Product::where('id_typeproduct','=',13)->get();
        $shoes = Product::where('id_typeproduct','=',14)->get();
        $safety = Product::where('id_typeproduct','=',15)->get();
        return view('shop',
            compact('category','product','shirt','bearing','tape','CPskate','shoes',
                    'deck','truck','wheels','gripTape','hardware','accessories','safety'));
    }
    public function singleShop($id_product){

        $single = Product::find($id_product);
        return view ('shop-single',compact('single'));

    }
    public function findCategory($id_typeproduct){
        $findCategory = type_product::find($id_typeproduct);
        return view('findproduct')
                ->with('findCategory',type_product::all()->sortBy('name'))
                ->with('product',$findCategory->product()->paginate(6));
                

    }
    public function news(){
        $news = News::all();
        return view('news',compact('news'));
    }
    public function about(){
        
        return view('about');
    }
    
}

