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

// Route::get('/master', function () {
//     return view('master');
// });
Route::group(['prefix' => 'admin'], function () {
    Route::resource('karyawans', 'KaryawanController');
    Route::resource('jabatans', 'JabatanController');
    Route::resource('pendidikans', 'PendidikanController');
    Route::resource('statuses', 'StatusController');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
