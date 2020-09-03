<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

//Route::get('/posts', function () {
    //$posts = [1,2,3,4,5];
    //return view('posts.list', ['posts'=> $posts]);
//});

//Route::get('/posts/{id}', function ($id) {
    //return view('posts.show');
//});

//CRUD 
// 3Routing :create/edit/list

//C create controller 的儲存操作
Route::post('/posts','PostController@store');
//管理者頁面
Route::get('/posts/admin','PostController@admin');
//1 add read routing 
Route::get('/posts/show/{post}','PostController@show');

//create 表單
Route::get('/posts/create','PostController@create');
//R read controller 的儲存操作 。{post}指的是post 的model 最後會疊代成數字@後面為method 的名子 只要兩邊對應就可以
Route::get('/posts/{post}','PostController@show');
//U 
Route::put('/posts/{post}','PostController@update');
//D
Route::delete('/posts/{post}','PostController@destroy');


//edit form
Route::get('/posts/{post}/edit}','PostController@edit');
//list
Route::get('/posts','PostController@index');

