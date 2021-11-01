<?php

namespace App\Http\Controllers;

use App\type_product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = type_product::latest()->paginate(5);
        return view('admin.category.index', compact('data'));
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatadData = $request->validate([
            'typeproduct_name' => 'required|unique:type_product|max:255'
        ],
        [
            

        ]);


        $category = new type_product;
        $category->typeproduct_name = $request->name;
        $category->save();

        return redirect('/admin/category/index');
                        
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
        return view ('admin.category.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view ('admin.category.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, type_product $type_product)
    {
        //
        $request->validate([
            'typeproduct_name' => 'required'
        ]);

        $type_product->update($request->all());

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(type_product $type_product)
    {
        //
        $type_product->delete();
        return redirect()-route('admin.category.index');
    }
}
