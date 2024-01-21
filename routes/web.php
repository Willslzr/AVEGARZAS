<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CobrosController;
use App\Http\Controllers\VisitaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TitularesController;
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\MensualidadesController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [VisitaController::class, 'main'])->name('visita.main');
Route::get('/visita/buscar', [VisitaController::class, 'buscar'])->name('visita.buscar');
Route::get('/visita/{$manzana}/{$casa}', [VisitaController::class, 'mostrar'])->name('visita.mostrar');
Route::post('/visita/store', [VisitaController::class, 'store'])->name('visita.store');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login/auth', [LoginController::class, 'login'])->name('login.auth');

Route::get('/registrar', [RegisterController::class, 'register'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/inicio', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::get('/test', [TestController::class, 'test'])->name('test');

Route::get('/titulares', [TitularesController::class, 'index'])->middleware('auth')->name('titulares');
Route::get('/titulares/nuevo', [TitularesController::class, 'create'])->middleware('auth')->name('titulares.create');
Route::post('titulares/store', [TitularesController::class, 'store'])->name('titulares.store');

Route::get('/configuracion', [ConfiguracionController::class, 'main'])->middleware('auth')->name('configuracion');
Route::post('/configuracion', [ConfiguracionController::class, 'store'])->name('config.store');

Route::get('/Mensualidades' , [MensualidadesController::class,'index'])->middleware('auth')->name('mensualidades');

Route::get('/Cobros' , [CobrosController::class,'index'])->middleware('auth')->name('cobros');
Route::get('/Cobros/aprobar/{id}' , [CobrosController::class,'aprobar'])->middleware('auth')->name('cobros.aprobar');


// Route::post('/login', [LoginController::class, 'login']);
