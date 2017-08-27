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

Route::get('/บุคลากร',function(){
	return view('layouts.committee');
});

Route::get('/ข้อมูลพรรณไม้',function(){
	return view('layouts.plantlist');
});

Route::get('/ติดต่อเรา',function(){
	return view('layouts.contact');
});

Route::get('/สวนพฤกษศาสตร์อะไร',function(){
	return view('layouts.about');
});