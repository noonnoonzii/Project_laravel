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
Route::post('/admin/category/create','CategoryController@store')->name('create');


    //MainWeb
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


