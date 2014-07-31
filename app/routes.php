<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return 'holi';
	return View::make('front.index');
});
Route::get('/register', function()
{
	//return 'holi';
	return View::make('front.register');
});

Route::group(array('prefix'=>'cpanel'), function(){

	Route::get('/', function(){
		return View::make('superadmin.index');
	});
	Route::resource('courses', 'courses_controller');
	Route::get('cosi',function(){
		return Redirect::to('cpanel/courses')->with('msg', '1');
	});
});