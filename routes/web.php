<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [UserController::class, 'index']);

Route::get('/test', [TestController::class, 'test'])->name('test');

Route::view('login', 'login');

Route::post('/post-login', [LoginController::class, 'login']);

// Route::post('', [LoginController::class, 'postLogin'])->name('postLogin');

// Route::post('/login', [LoginController::class, 'login']);
