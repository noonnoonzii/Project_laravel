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
       $data = type_product::first()->paginate(5);
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
       // $validatadData = $request->validate([
        // 'typeproduct_name' => 'required|unique:type_product|max:255'
        //]);


        $category = new type_product;
        $category->typeproduct_name = $request->name;
        $category->save();

        return redirect('/admin/category/index')
                        ->with('success', 'Category Created successfully.');
                        
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
    public function edit($id_typeproduct)
    {
        ////dd($type);
        $type = type_product::find($id_typeproduct);
        return view ('admin.category.edit',compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_typeproduct)
    {
        //$validatedData = $request->validate([
        //    'typeproduct_name' => 'required'
        //]);

        $type = type_product::find($id_typeproduct);
        $type->typeproduct_name = $request->name;
        $type->save();

        return redirect ('admin/category/index')
                        ->with('success','Category Updated succcessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_typeproduct)
    {
        //
        type_product::destroy($id_typeproduct);
        return redirect('admin/category/index')
                ->with('success','Category Deleted successfully.');
    }
}
