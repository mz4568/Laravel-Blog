<?php

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
//Route::get('single/{id}','blogController@getSingle');
Route::post('/','Auth/RegisterController@index');
Route::post('comment/{id}',['as' => 'comment.store', 'uses'=> 'commentController@store']);
Route::get('blog/{slug}',['as' => 'blog.single', 'uses'=> 'blogController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::get('blog',['as' => 'blog.index', 'uses'=> 'blogController@index']);
Route::get('home', 'pagesController@index');
Route::get('about', 'pagesController@about');
Route::get('contact', 'pagesController@contact');
Route::get('slider', 'pagesController@slider');
Route::resource('posts', 'postsController');
Route::resource('tags', 'tagsController');
Route::resource('categories', 'categoryController');


Route::get('/', function () {
		    return view('mzSignIn.mz');
		});

Route::get('logOut', function () {

	    Auth::logOut();
        return Redirect::to('');

		})->middleware("auth");
       

Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');
//Route::get('/logOut', 'LoginController@destroy');
Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

