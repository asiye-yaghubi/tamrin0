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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('home');
});


//===========article route ==============
Route::get('/article','ArticleController@index');
Route::get('/add','ArticleController@create');
Route::post('/store','ArticleController@store');
Route::get('/detail/{article}','ArticleController@show');

//==============middleware============
// Route::get('/add','ArticleController@create')->middleware('auth');
// Route::middleware('auth')->get('/add','ArticleController@create');

//================uploader============
Route::get('/upload','ArticleController@upload');
Route::post('/uploader','ArticleController@uploader');





//==================comment===============
Route::get('comment/index','CommentController@index');
Route::get('comment/add','CommentController@create');
Route::post('comment/store','CommentController@store');


//===============category===========
Route::resource('categories', 'CategoryController');

Route::get('/category/index/{category}', 'CategoryController@index');


//==============test===========
// Route::get('/test',function(){
    
//     flash('matn flash');
//     return view('test');
// });

Route::post('comment/add/{article}','CommentController@add')->name('comment.add');