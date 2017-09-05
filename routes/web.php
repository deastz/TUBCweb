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
    return view('layouts.index');
});

Route::get('/committee',function(){
	return view('layouts.committee');
});

Route::get('/plant_list',function(){
	return view('layouts.plantlist');
});

Route::get('/contact_us',function(){
	return view('layouts.contact');
});

Route::get('/know_us',function(){
	return view('layouts.about');
});