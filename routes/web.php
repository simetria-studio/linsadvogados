<?php

<<<<<<< Updated upstream

use App\Http\Controllers\CepController;
=======
use App\Http\Controllers\Paginas\AudienciaController;
use App\Http\Controllers\Paginas\ClientesController;
use App\Http\Controllers\Paginas\FinanceiroController;
use App\Http\Controllers\Paginas\PericiaController;
>>>>>>> Stashed changes
use App\Http\Controllers\Painel\ContaController;
use App\Http\Controllers\Painel\PerfilController;
use App\Http\Controllers\Paginas\PericiaController;
use App\Http\Controllers\Paginas\ClientesController;
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
Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    route::get('conta', [ContaController::class, 'index'])->name('conta');
    route::get('perfil', [PerfilController::class, 'index'])->name('perfil');
    route::get('edit-perfil', [PerfilEditController::class, 'index'])->name('edit-perfil');
    route::get('privacidade', [PrivacidadeController::class, 'index'])->name('privacidade');
    route::get('clientes', [ClientesController::class, 'index'])->name('clientes');
    route::get('financeiro', [FinanceiroController::class, 'index'])->name('financeiro');
    route::get('pericia', [PericiaController::class, 'index'])->name('pericia');
    route::get('audiencia', [AudienciaController::class, 'index'])->name('audiencia');
    route::post('clientes-store', [ClientesController::class, 'store'])->name('clientes.store');
    route::any('clientesdelete/{id}', [ClientesController::class, 'destroy'])->name('clientes.delete');
});
