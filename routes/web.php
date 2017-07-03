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
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('login','AuthController@getLogin')->name('login');
Route::post('login','AuthController@postLogin');
Route::get('logout','AuthController@logout');
Route::get('register','AuthController@register');
Route::post('register','AuthController@store');
Route::group(['middleware'=>['auth']],function(){


Route::get('/', function () {
    return view('welcome');
});

Route::get('index2',function(){
    return view('index2');
});


Route::get('/pages/member/list','MemberController@indexlist');
Route::get('/pages/member/add','MemberController@registermember');
Route::post('/registermember','MemberController@storemember');
Route::get('/pages/member/edit','MemberController@edit');
Route::post('/edit', 'MemberController@updateedit'); 
Route::delete('/delete/{user}','MemberController@destroy');
Route::get('/profile', 'ProfileController@index');	 
Route::post('/profile', 'ProfileController@update'); 

Route::get('/pages/balance/deposit','DepositController@create');
Route::post('/deposit','DepositController@store');
Route::get('/pages/balance/list','DepositController@show');
Route::get('/pages/balance/{deposit}/edit','DepositController@edit');
Route::post('/deposit/{deposit}','DepositController@update');



});

 
 