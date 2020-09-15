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
    return view('welcome');
});
Route::get('/cal', function () {
    return view('calculator');
});

Route::post('/calculate', 'FormController@calculator');

// Route::get('/form', 'FormController@index');
// Route::post('/proses', 'FormController@proses');

// Route::get('/index', function () {
//     return view('index');
// });
// Route::redirect('/admin', '/error');

// Route::get('product/{id}', function ($id) {
//     return 'User'. $id;
// });

