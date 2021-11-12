<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

    //admin
route::get('/admin/index','AdminController@index')->name('index');

    
    //admin-->Category
Route::get('/admin/category/index','CategoryController@index')->name('category');
Route::get('/admin/category/create','CategoryController@create');
Route::post('/admin/category/create','CategoryController@store')->name('create.category');
Route::get('/admin/category/edit/{id}','CategoryController@edit');
Route::post('/admin/category/update/{id}','CategoryController@update')->name('update.category');
Route::post('/admin/category/edit','CategoryController@edit')->name('edit.category');
Route::get('/admin/category/delete/{id}','CategoryController@destroy');

    //admin-->Product
Route::get('/admin/product/index','ProductController@index')->name('product');
Route::get('/admin/product/create','ProductController@create');
Route::get('/admin/product/edit/{id}','ProductController@edit');


    //admin-->News
Route::get('/admin/news/index', 'NewsController@index')->name('news');
Route::get('/admin/news/create','NewsController@create');
Route::get('/admin/news/edit/{id}','NewsController@edit');

    //admin-->Users
Route::get('/admin/users/index', 'UsersController@index')->name('users');


    //admin-->Home_pic
Route::get('/admin/home_pic/index', 'HomepicController@index')->name('home_pic');

    //MainWeb
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


