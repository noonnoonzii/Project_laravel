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

//main web
Route::get('/', 'WelcomeController@welcome')->name('welcome');


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
Route::post('/admin/product/create','ProductController@store')->name('create.product');
Route::post('/admin/product/update/{id}','ProductController@update')->name('update.product');
Route::get('/admin/product/delete/{id}','ProductController@destroy');


    //admin-->News
Route::get('/admin/news/index', 'NewsController@index');
Route::get('/admin/news/create','NewsController@create');
Route::post('/admin/news/create','NewsController@store')->name('create.news');
Route::get('/admin/news/edit/{id}','NewsController@edit');
Route::post('/admin/news/update/{id}','NewsController@update');
Route::get('/admin/news/delete/{id}','NewsController@destroy');

    //admin-->Users
Route::get('/admin/users/index/{id}', 'UsersController@index')->name('users');
Route::post('/admin/users/update/{id}','usersController@update');


    //admin-->Home_pic
Route::get('/admin/home_pic/index', 'HomepicController@index')->name('home_pic');
Route::post('/admin/home_pic/index','HomepicController@create')->name('create.homepic');
Route::get('/admin/home_pic/delete','HomepicController@destroy');

    //MainWeb
Auth::routes();
    //ShopCategory
Route::get('/product/category/{id}','WelcomeController@findCategory');
Route::get('/product','Welcomecontroller@shop');
Route::get('/shop-single/{id}','WelcomeController@singleShop');

Route::get('/home', 'WelcomeController@index')->name('home');
Route::get('/news','WelcomeController@news')->name('news');
Route::get('/about','WelcomeController@about')->name('about');


