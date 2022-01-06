<?php

use App\Http\Controllers\Painel\ContaController;
use App\Http\Controllers\Painel\PerfilController;
use App\Http\Controllers\Painel\PerfilEditController;
use App\Http\Controllers\Painel\PrivacidadeController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::get('conta', [ContaController::class, 'index'])->name('conta');
route::get('perfil', [PerfilController::class, 'index'])->name('perfil');
route::get('edit-perfil', [PerfilEditController::class, 'index'])->name('edit-perfil');
route::get('privacidade', [PrivacidadeController::class, 'index'])->name('privacidade');
