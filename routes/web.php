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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('admin.adminHome');
});

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index3'])->name('new');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function()
{
    Route::resource('posts', 'App\Http\Controllers\PostController');   ////////要打全名
    Route::resource('products', 'App\Http\Controllers\ProductsController');
});

Auth::routes();
