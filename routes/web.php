<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::redirect('', 'posts', 301);

Route::middleware('auth')
    ->resource('categories', CategoryController::class)
    ->except([
        'show'
    ]);


Route::middleware('auth')
    ->resource('posts', PostController::class);

Route::get('/home', [HomeController::class, 'index'])->name('home');
