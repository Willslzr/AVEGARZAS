<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CobrosController;
use App\Http\Controllers\VecinoController;
use App\Http\Controllers\VisitaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TitularesController;
use App\Http\Controllers\CartasdePagoController;
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


Route::get('/vecino', [VecinoController::class, 'main'])->middleware('auth')->name('vecino');
Route::get('/vecino/reporte/{id}', [VecinoController::class, 'reporte'])->middleware('auth')->name('vecino.reporte');
Route::get('/vecino/{manzana}/{casa}', [VecinoController::class, 'mostrar'])->name('vecino.mostrar');

Route::get('/', [VisitaController::class, 'main'])->name('visita.main');
Route::get('/visita/buscar', [VisitaController::class, 'buscar'])->name('visita.buscar');
Route::get('/visita/{manzana}/{casa}', [VisitaController::class, 'mostrar'])->name('visita.mostrar');
Route::post('/visita/store', [VisitaController::class, 'store'])->name('visita.store');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login/auth', [LoginController::class, 'login'])->name('login.auth');

Route::get('/registrar', [RegisterController::class, 'register'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'admin'])->name('dashboard');
Route::get('/inicio', [DashboardController::class, 'index'])->middleware(['auth', 'admin'])->name('dashboard');

Route::get('/test', [TestController::class, 'test'])->name('test');

Route::get('/titulares', [TitularesController::class, 'index'])->middleware(['auth', 'admin'])->name('titulares');
Route::get('/titulares/nuevo', [TitularesController::class, 'create'])->middleware(['auth', 'admin'])->name('titulares.create');
Route::get('/titulares/reporte', [TitularesController::class, 'reporte'])->middleware(['auth', 'admin'])->name('titulares.reporte');
Route::post('titulares/store', [TitularesController::class, 'store'])->name('titulares.store');
Route::post('titulares/update', [TitularesController::class, 'update'])->name('titulares.update');
Route::get('/titulares/{id}', [TitularesController::class, 'edit'])->middleware(['auth', 'admin'])->name('titulares.edit');

Route::get('/configuracion', [ConfiguracionController::class, 'main'])->middleware(['auth', 'admin'])->name('configuracion');
Route::post('/configuracion/store', [ConfiguracionController::class, 'store'])->name('config.store');
Route::get('/configuracion/categorias/{id}', [ConfiguracionController::class, 'eliminar'])->name('configurar.eliminar');
Route::get('/configuracion/categorias', [ConfiguracionController::class, 'configurar'])->name('configurar');
Route::post('/configuracion/guardar', [ConfiguracionController::class, 'guardar'])->name('config.guardar');

Route::get('/Mensualidades', [MensualidadesController::class,'index'])->middleware(['auth', 'admin'])->name('mensualidades');
Route::get('/Mensualidades/reporte/{id}', [MensualidadesController::class,'reportepersonal'])->middleware(['auth', 'admin'])->name('mensualidades.personal.reporte');
Route::get('/Mensualidades/general', [MensualidadesController::class,'reportegeneral'])->middleware(['auth', 'admin'])->name('mensualidades.general');

Route::get('/Cobros', [CobrosController::class,'index'])->middleware(['auth', 'admin'])->name('cobros');
Route::get('/Cobros/soporte/{id}', [CobrosController::class,'soporte'])->middleware(['auth', 'admin'])->name('cobros.soporte');
Route::get('/Cobros/aprobar/{id}', [CobrosController::class,'aprobar'])->middleware(['auth', 'admin'])->name('cobros.aprobar');
Route::get('/Cobros/rechazar/{id}', [CobrosController::class,'rechazar'])->middleware(['auth', 'admin'])->name('cobros.rechazar');

Route::get('/CartasDePago/recibo/{id}', [CartasdePagoController::class,'recibo'])->middleware(['auth', 'admin'])->name('cartasdepago.recibo');
Route::get('/CartasDePago', [CartasdePagoController::class,'index'])->middleware(['auth', 'admin'])->name('cartasdepago');
Route::get('/CartasDePago/reporte', [CartasdePagoController::class,'reporte'])->middleware(['auth', 'admin'])->name('cartasdepago.reporte');
Route::get('/CartasDePago/create', [CartasdePagoController::class,'create'])->middleware(['auth', 'admin'])->name('cartasdepago.create');
Route::post('/CartasDePago/store', [CartasdePagoController::class,'store'])->middleware(['auth', 'admin'])->name('cartasdepago.store');
Route::post('/CartasDePago/guardar', [CartasdePagoController::class,'guardar'])->middleware(['auth', 'admin'])->name('cartasdepago.guardar');
Route::get('/CartasDePago/{id}', [CartasdePagoController::class,'edit'])->middleware(['auth', 'admin'])->name('cartasdepago.edit');


// Route::post('/login', [LoginController::class, 'login']);
