<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\ReadbookController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('login');

Route::match(['get', 'post'], '/register', [RegisterController::class, 'register'])->name('register');


Route::middleware('auth')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/readbook', [ReadbookController::class, 'index'])->name('readbook');

    Route::group(['prefix'=>'blog'], function(){
        Route::get('/', [BlogController::class, 'index'])->name('blog');
        //Create Post
        Route::get('/createPost', [BlogController::class, 'create'])->name('create');
        Route::post('/createPost', [BlogController::class, 'create'])->name('create');
        //Show Post
        Route::get('/show/{id}', [BlogController::class, 'show'])->name('show');
    });
    

});

