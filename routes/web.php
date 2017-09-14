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

Route::get('/', function () {
	if(Session::has('session')){
    	return redirect('/player/home');
	}else{
		return view('welcome');
	}
});

Route::post('/ServiceLogin', 'AuthController@do_login');
Route::post('/ServiceRegister', 'AuthController@do_register');

Route::get('/player/home', 'PlayerController@show_home');
Route::get('/admin/home', 'AdminController@show_home');
Route::get('/pingpong', 'PlayerController@show_pingpong');
Route::get('/goblin', 'PlayerController@show_goblin');
Route::get('/flappy', 'PlayerController@show_flappy');
Route::get('/trex', 'PlayerController@show_trex');
Route::get('/space', 'PlayerController@show_space');

Route::post('/refill', 'AdminController@refill');

Route::get('/scoreboard', 'PlayerController@show_scoreboard');
Route::get('/logout', 'AuthController@do_logout');

Route::post('/submit_score', 'PlayerController@score_submit');
