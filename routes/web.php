<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\STarjetaController;
use App\Http\Controllers\tc_movimientosController;
use App\Http\Controllers\tc_garantiasController;
use App\Http\Controllers\tc_estadoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\TodosclientesController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\CarnetController;
use App\Http\Controllers\CertificadoController;
use App\Http\Controllers\CodigoQRController;
use App\Http\Controllers\NuevoQRController;
use App\Http\Controllers\ReportesController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Solicitud_Tarjetas',[App\Http\Controllers\STarjetaController::class, 'create'])->name('Solicitud_Tarjetas');

Route::get('/tc_movimientos',[App\Http\Controllers\tc_movimientosController::class, 'movimiento'])->name('tc_movimientos');

Route::get('/tc_garantias',[App\Http\Controllers\tc_garantiasController::class, 'garantia'])->name('tc_garantias');

Route::get('/tc_estado',[App\Http\Controllers\tc_estadoController::class, 'estado'])->name('tc_estado');

Route::get('/clientenuevo',[App\Http\Controllers\ClienteController::class, 'Cliente_Nuevo'])->name('clientenuevo');

Route::get('/InscripcionCap',[App\Http\Controllers\InscripcionController::class, 'Inscripcion'])->name('InscripcionCap');

Route::get('/Todosclientes',[App\Http\Controllers\TodosclientesController::class, 'clientes'])->name('Todosclientes');

Route::get('/Matriculados',[App\Http\Controllers\MatriculadosController::class, 'Alumnos'])->name('Matriculados');

Route::get('/perfil',[App\Http\Controllers\PerfilController::class, 'Perfil'])->name('perfil');

Route::get('/Cursos',[App\Http\Controllers\CursosController::class, 'Cursos'])->name('Cursos');

Route::get('/Carnets',[App\Http\Controllers\CarnetController::class, 'Carnet'])->name('Carnets');

Route::get('/Certificados',[App\Http\Controllers\CertificadoController::class, 'Certificado'])->name('Certificados');

Route::get('/QR',[App\Http\Controllers\CodigoQRController::class, 'CodigoQR'])->name('CodigoQR');

Route::get('/NuevoQR',[App\Http\Controllers\NuevoQRController::class, 'NuevoQR'])->name('NuevoQR');

Route::get('/Reportes',[App\Http\Controllers\ReportesController::class, 'Reportes'])->name('Reportes');

Route::get('/nuevoproducto',[App\Http\Controllers\ProductoController::class, 'Nuevo_Producto'])->name('nuevoproducto');

Route::get('/inventario',[App\Http\Controllers\InventarioController::class, 'inventario'])->name('inventario');

Route::get('/posts','ConexionController@getAllPosts');

Route::get('/posts{id}','ConexionController@getPostById');
