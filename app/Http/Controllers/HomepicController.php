<?php

namespace App\Http\Controllers;

use App\Home_pic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class HomepicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Home_pic::latest()->paginate(3);
        return view('admin/home_pic/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $picture = new Home_pic;
        if ($request->hasFile('image')){
            $filename = Str::ramdom(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'admin/asset/img/home_pic',$filename);
            Image::make(public_path().'admin/asset/img/home_pic'.$filename);
            $picture->image_homepic = $filename;
        }else{
            $picture->image_homepic = "nopic.png";
        }
        $picture->save();
            return redirect('admin/home_pic')
                    ->with('success','Created Picture homepage successfully');

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
    public function edit($id_homepic)
    {
        //
        if ($request->hasFile('image')){
            $picture = find::Home_pic($id_homepic);
            if ($product->image_homepic != 'nopic.png') {
                FIle::delete(public_path().'admin/asset/img/home_pic/'.$picture->image_homepic);
            }
            $filename = Str::ramdom(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'admin/asset/img/home_pic',$filename);
            Image::make(public_path().'admin/asset/img/home_pic'.$filename);
            $picture->image_homepic = $filename;
        }else{
            $picture->image_homepic = "nopic.png";
        }
        $picture->save();
            return redirect('admin/home_pic')
                    ->with('success','Created Picture homepage successfully');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_homepic)
    {
        //
        Home_pic::destroy($id_homepic);
            return redirect('admin/home_pic/index')
                    ->with('success','Deleted picture successfuly');
    }
}
