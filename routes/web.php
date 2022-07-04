<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EvidenciaController;
use App\Http\Controllers\PublicacionController;

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
    return redirect(route("login"));
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/mostrar/jobseeker', [UserController::class, "mostrarjobseek"])->middleware('auth');
Route::get('/formulario/perfil', [UserController::class, "formularioperfil"])->middleware('auth');
Route::post('/actualizar/perfil', [UserController::class, "actualizarperfil"])->name("actualizar.perfil");
Route::get('/mostrar/curriculumvitae', [EvidenciaController::class, "mostrarcurrivitae"])->middleware('auth');
Route::get('/mostrar/ofertas', [PublicacionController::class, "mostrarofertas"])->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
