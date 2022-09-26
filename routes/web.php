<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {return view('homeSlideshow');})->name('pageHome');

Route::post('login', 'Auth\LoginController@login');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function() {
    Route::resource('posts', 'App\Http\Controllers\NewsController');   ////////要打全名
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/news', 'App\Http\Controllers\HomeController@indexNews')->name('news');


Route::get('/adminHome', 'App\Http\Controllers\NewsController@index')->name('adminHome');
