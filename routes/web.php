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

Route::get('/', 'HomeController@home');
Route::get('/register', 'AuthController@register');
Route::post('/welcome', 'AuthController@form');

Route::get('/master', function() {

    return view('adminlte.master');
});

Route::get('/table', function(){

    return view('adminlte.content.table');
});

route::get('/data-tables', function(){

    return view('adminlte.content.data-tables');

});
    