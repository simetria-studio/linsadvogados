<?php
use App\Http\Controllers\CepController;
use App\Http\Controllers\Paginas\AudienciaController;
use App\Http\Controllers\Paginas\ClientesController;
use App\Http\Controllers\Paginas\FinanceiroController;
use App\Http\Controllers\Paginas\PericiaController;
use App\Http\Controllers\Painel\ContaController;
use App\Http\Controllers\Painel\PerfilController;
use App\Http\Controllers\Painel\PerfilEditController;
use App\Http\Controllers\Painel\PrivacidadeController;

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
Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    route::get('financeiro',              [FinanceiroController::class, 'index'])  ->name('financeiro');
    route::post('financeiro-store',       [FinanceiroController::class, 'store'])  ->name('financeiro.store');
    route::any('financeirodelete/{id}',   [FinanceiroController::class, 'destroy'])->name('financeiro.delete');
    route::get('financeiroesver/{id}',    [FinanceiroController::class, 'show'])   ->name('financeiro.show');
    route::get('financeiroeditar/{id}',   [FinanceiroController::class, 'edit'])   ->name('financeiro.edit');
    route::post('financeiroupdate/{id}',  [FinanceiroController::class, 'update']) ->name('financeiro.update');
    Route::post('search1',                [FinanceiroController::class, 'search']) ->name('search1');

    route::get  ('pericia',            [PericiaController::class, 'index'])  ->name('pericia');
    route::post ('pericia-store',      [PericiaController::class, 'store'])  ->name('pericia.store');
    route::any  ('periciadelete/{id}', [PericiaController::class, 'destroy'])->name('pericia.delete');
    route::get  ('periciaver/{id}',    [PericiaController::class, 'show'])   ->name('pericia.show');
    route::get  ('periciaeditar/{id}', [PericiaController::class, 'edit'])   ->name('pericia.edit');
    route::post ('periciaupdate/{id}', [PericiaController::class, 'update']) ->name('pericia.update');

    route::get  ('audiencia',            [AudienciaController::class, 'index'])  ->name('audiencia');
    route::post ('audiencia-store',      [AudienciaController::class, 'store'])  ->name('audiencia.store');
    route::any  ('audienciadelete/{id}', [AudienciaController::class, 'destroy'])->name('audiencia.delete');
    route::get  ('audienciaver/{id}',    [AudienciaController::class, 'show'])   ->name('audiencia.show');
    route::get  ('audienciaeditar/{id}', [AudienciaController::class, 'edit'])   ->name('audiencia.edit');
    route::post ('audienciaupdate/{id}', [AudienciaController::class, 'update']) ->name('audiencia.update');

    route::get('clientes',              [ClientesController::class, 'index'])   ->name('clientes');
    route::post('clientes-store',       [ClientesController::class, 'store'])   ->name('clientes.store');
    route::any('clientesdelete/{id}',   [ClientesController::class, 'destroy']) ->name('clientes.delete');
    route::get('clientesver/{id}',      [ClientesController::class, 'show'])    ->name('clientes.show');
    route::get('clienteseditar/{id}',   [ClientesController::class, 'edit'])    ->name('clientes.edit');
    route::post('clienteseupdate/{id}', [ClientesController::class, 'update'])  ->name('clientes.update');
    Route::post('search',               [ClientesController::class, 'search'])  ->name('search');

    Route::get('buscacep', [CepController::class, 'buscaCep'])->name('address.cep');
});
