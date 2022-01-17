<?php

namespace App\Http\Controllers;
use App\User;
use Image;
use File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::find($id);
        return view('admin/users/index');//compact('users')
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $users = new User();
        $users->name = $request->name;
        $users->lastname = $request->lname;
        $users->phone = $request->phone;
        $users->email = $request->email;
        $users->address = $request->address;
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
    public function edit($id)
    {
        //
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
        //Profile image edit
        if($request ->hasFile('profile')){
            $users = User::find($id);
            if ($users->image_profile != 'user'){
                File::delete(public_path().'admin/asset/img/users/profile/'.$users->image_profile);
            }
            $filename =Str::random(8).'.'.$request->file('profile')->getClientOriginalExtension();
            $request->file('profile')->move(public_path().'/admin/asset/img/users/profile/',$filename);
            Image::make(public_path().'/admin/asset/img/users/profile/'.$filename);
            $users->image_profile = $filename;
            $users->name = $request->name;
            $users->lastname = $request->lname;
            $users->phone = $request->phone;
            $users->email = $request->email;
            $users->address = $request->address;
        }else{
            $users = User::find($id);
            $users->name = $request->name;
            $users->lastname = $request->lname;
            $users->phone = $request->phone;
            $users->email = $request->email;
            $users->address = $request->address;
        }
        //Cover image edit
        if($request ->hasFile('cover')){
            $users = User::find($id);
            if ($users->cover_image != 'user'){
                File::delete(public_path().'admin/asset/img/users/cover/'.$users->cover_image);
            }
            $filename =Str::random(8).'.'.$request->file('cover')->getClientOriginalExtension();
            $request->file('cover')->move(public_path().'/admin/asset/img/users/cover/',$filename);
            Image::make(public_path().'/admin/asset/img/users/cover/'.$filename);
            $users->cover_image = $filename;
            $users->name = $request->name;
            $users->lastname = $request->lname;
            $users->phone = $request->phone;
            $users->email = $request->email;
            $users->address = $request->address;
        }else{
            $users = User::find($id);
            $users->name = $request->name;
            $users->lastname = $request->lname;
            $users->phone = $request->phone;
            $users->email = $request->email;
            $users->address = $request->address;
        }
        $users->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
