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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/admin/zone', 'ZoneController@index');
//Route::get('/admin/zone/add', 'ZoneController@create');
//Route::post('/admin/zone', 'ZoneController@store');

Route::prefix('admin')->name("admin.")->group(function () {
    Route::resource('zones', 'ZoneController');
    Route::resource('items', 'ItemController');
});
