<?php

namespace App\Http\Controllers;
use App\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function welcome(){
        $news = News::latest()->paginate(3);
        return view('welcome',compact('news'));
    }
    public function index()
    {
        return view('home');
    }
    public function shop(){
        return view('shop');
    }
    public function news(){
        $news = News::all();
        return view('news',compact('news'));
    }
    public function about(){
        return view('about');
    }
}
