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

Route::get('/', 'NewsController@index_lists');

Route::get('/committee',function(){
	return view('layouts.committee');
});

Route::get('/plant_list','PlantController@lists');

Route::get('/plant_data/{id}','PlantController@show');

Route::get('/contact_us',function(){
	return view('layouts.contact');
});

Route::get('/know_us',function(){
	return view('layouts.about');
});

Route::get('/newslist','NewsController@lists');

Route::get('/news/{id}','NewsController@show');

Route::post('/plant_search','PlantController@search');
