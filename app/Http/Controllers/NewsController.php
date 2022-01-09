<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Image;
use File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = News::latest()->paginate(3);
        return view('admin/news/index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin/news/create');
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
        $news = new News;
        $news->header_news = $request->name;
        $news->content_news = $request->text;
        
        if ($request->hasFile('image')) {
            $filename = Str::random(6).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/asset/img/news/',$filename);
            Image::make(public_path().'/admin/asset/img/news/'.$filename);
            $news->image_new = $filename;
        }else{
            $news->image_new = 'nopic.png';
        }
        $news->save();
        return redirect('admin/news/index/')
                        ->with('success','Created News successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_newinfo)
    {
        //
        $news = News::find($id_newinfo);
        return view('admin/news/edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_newinfo)
    {
        //
        if ($request ->hasFile('image')) {
            $news = News::find($id_newinfo);
            if ($news->image_new != 'nopic.png') {
                File::delete(public_path().'admin/asset/img/product/'.$news->image_new);
            }
            $filename = Str::random(11).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/asset/img/news/',$filename);
            Image::make(public_path().'/admin/asset/img/news/'.$filename);
            $news->image_new = $filename;
            $news->header_news = $request->head;
            $news->content_news = $request->content;
        }else{
            $news = News::find($id_newinfo);
            $news->header_news = $request->head;
            $news->content_news = $request->content;
        }
        $news->save();
        return redirect('/admin/news/index')
                    ->with('success','News Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_newinfo)
    {
        //
        News::destroy($id_newinfo);
            return redirect('/admin/news/index')
                    ->with('success','Deleted News successfully');
    }
}
