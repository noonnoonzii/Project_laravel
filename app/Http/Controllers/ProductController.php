<?php

namespace App\Http\Controllers;

use App\Product;
use App\type_product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Product::latest()->paginate(10);
        
    return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = type_product::all();
        return view ('admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $product = new Product;
        $product->name_product = $request->name;
        $product->price = $request->price;
        $product->id_typeproduct = $request->category;
        $product->brand = $request->brand;
        $product->description = $request->description;
        
        
        if ($request ->hasFile('image')) {
            $filename = Str::random(11).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/asset/img/product/',$filename);
            Image::make(public_path().'/admin/asset/img/product/'.$filename);
            $product->pic_product = $filename;
        }else{
            $product->pic_product = 'nopic.png';

        }
        $product->save();
        return redirect('admin/product/index')
                    ->with('success','Product Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_product)
    {
        //
        $product = Product::find($id_product);
        return view('admin/product/edit',compact('product'))
                    ->with('category',type_product::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_product)
    {
        //
        
        if ($request ->hasFile('image')) {
            $product = Product::find($id_product);
            if ($product->pic_product != 'nopic.png') {
                File::delete(public_path().'admin/asset/img/product/'.$product->pic_product);
            }
            $filename = Str::random(11).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/asset/img/product/',$filename);
            Image::make(public_path().'/admin/asset/img/product/'.$filename);
            $product->pic_product = $filename;
            $product->name_product = $request->name;
            $product->price = $request->price;
            $product->id_typeproduct = $request->category;
            $product->brand = $request->brand;
            $product->description = $request->description;
        }else{
            $product = Product::find($id_product);
            $product->name_product = $request->name;
            $product->price = $request->price;
            $product->id_typeproduct = $request->category;
            $product->brand = $request->brand;
            $product->description = $request->description;
        }
        $product->save();

        return redirect('admin/product/index')
                    ->with('success','Updated Prroduct successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_product)
    {
        Product::destroy($id_product);
           return redirect('admin/product/index')
                ->with('success','Product Deleted successfully');
    }
}
