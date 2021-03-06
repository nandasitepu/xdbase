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

Route::get('/landing', function () {
  return view('landing');
});

Route::get('/', function () {
  return view('xdbase');
});



Auth::routes();


Route::resource('dashboard', 'AdminController');

// The Pages
Route::get('/disclaimer', function () {return view('pages.disclaimer');});
Route::get('/sk', function () {return view('pages.sk');});
Route::get('/faq', function () {return view('pages.faq');});


//Tipe
Route::resource('tipe', 'TipeController');

//Penyedia
Route::resource('penyedia', 'PenyediaController', ['parameters' => ['penyedia' => 'penyedia']]);

//Layanan
Route::resource('layanan', 'LayananController');

//Charts
Route::resource('charts', 'ChartController');
