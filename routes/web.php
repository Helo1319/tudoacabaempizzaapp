<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CargoController,
    ClienteController,
    EnderecoController,
    PedidoController,
    ProdutoController,
    ProdutoTamanhoController,
    ProfileController,
    UsuarioController,
};
use App\Models\Cliente;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

/*
 * |--------------------------------------------------------------------------
 * | Cargos
 * |--------------------------------------------------------------------------
 */
Route::prefix('cargos')
    ->controller(CargoController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('cargo.index');
        Route::get('/novo', 'create')
            ->name('cargo.create');
        Route::get('/{id}', 'show')
            ->name('cargo.show');
        Route::get('/editar/{id}', 'edit')
            ->name('cargo.edit');
        Route::post('/store', 'store')
            ->name('cargo.store');
        Route::post('/update', 'update')
            ->name('cargo.update');
        Route::get('/destroy/{id}', 'destroy')
            ->name('cargo.destroy');
    });

/*
 * |--------------------------------------------------------------------------
 * | Cliente
 * |--------------------------------------------------------------------------
 */
Route::prefix('clientes')
    ->controller(ClienteController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('cliente.index');
        Route::get('/novo', 'create')
            ->name('cliente.create');
        Route::get('/{id}', 'show')
            ->name('cliente.show');
        Route::get('/editar/{id}', 'edit')
            ->name('cliente.edit');
        Route::post('/store', 'store')
            ->name('cliente.store');
        Route::post('/update', 'update')
            ->name('cliente.update');
        Route::post('/destroy', 'destroy')
            ->name('cliente.destroy');
    });

/*
 * |--------------------------------------------------------------------------
 * | Endereço
 * |--------------------------------------------------------------------------
 */
Route::prefix('enderecos')
    ->controller(EnderecoController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('endereco.index');
        Route::get('/novo', 'create')
            ->name('endereco.create');
        Route::get('/{id}', 'show')
            ->name('endereco.show');
        Route::get('/editar/{id}', 'edit')
            ->name('endereco.edit');
        Route::post('/store', 'store')
            ->name('endereco.store');
        Route::post('/update', 'update')
            ->name('endereco.update');
        Route::post('/destroy', 'destroy')
            ->name('endereco.destroy');
    });

/*
 * |--------------------------------------------------------------------------
 * | Pedido
 * |--------------------------------------------------------------------------
 */
Route::prefix('pedidos')
    ->controller(PedidoController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('pedido.index');
        Route::get('/novo', 'create')
            ->name('pedido.create');
        Route::get('/{id}', 'show')
            ->name('pedido.show');
        Route::get('/editar/{id}', 'edit')
            ->name('pedido.edit');
        Route::post('/store', 'store')
            ->name('pedido.store');
        Route::post('/update', 'update')
            ->name('pedido.update');
        Route::post('/destroy', 'destroy')
            ->name('pedido.destroy');
    });

/*
 * |--------------------------------------------------------------------------
 * | Produto
 * |--------------------------------------------------------------------------
 */
Route::prefix('produtos')
    ->controller(ProdutoController::class)
    ->group(function () {
        Route::get('/', 'index')->name('produto.index');
        Route::get('/novo', 'create')->name('produto.create');
        Route::get('/{id}', 'show')->name('produto.show');
        Route::get('/editar/{id}', 'edit')->name('produto.edit');
        Route::get('/tamanho/{id_produto}', 'createTamanho')->name('produto.createTamanho');
        Route::get('/tamanho/editar/{id}', 'editTamanho')->name('produto.editTamanho');
        Route::post('/store', 'store')->name('produto.store');
        Route::post('/update/{id}', 'update')->name('produto.update');
        Route::get('/destroy/{id}', 'destroy')->name('produto.destroy');
        Route::post('/tamanho/store/{id_produto}', 'storeTamanho')->name('produto.storeTamanho');
        Route::post('/tamanho/update', 'updateTamanho')->name('produto.updateTamanho');
        Route::post('/tamanho/destroy', 'destroyTamanho')->name('produto.destroyTamanho');
    });

/*
 * |--------------------------------------------------------------------------
 * | Tamanhos
 * |--------------------------------------------------------------------------
 */
Route::prefix('tamanhos')
    ->controller(ProdutoTamanhoController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('tamanho.index');
        Route::get('/novo', 'create')
            ->name('tamanho.create');
        Route::get('/{id}', 'show')
            ->name('tamanho.show');
        Route::get('/editar/{id}', 'edit')
            ->name('tamanho.edit');
        Route::post('/store', 'store')
            ->name('tamanho.store');
        Route::post('/update', 'update')
            ->name('tamanho.update');
        Route::post('/destroy', 'destroy')
            ->name('tamanho.destroy');
    });

/*
 * |--------------------------------------------------------------------------
 * | Usuarios
 * |--------------------------------------------------------------------------
 */
Route::prefix('usuario')
    ->controller(UsuarioController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('usuario.index');
        Route::get('/novo', 'create')
            ->name('usuario.create');
        Route::get('/{id}', 'show')
            ->name('usuario.show');
        Route::get('/editar/{id}', 'edit')
            ->name('usuario.edit');
        Route::post('/store', 'store')
            ->name('usuario.store');
        Route::post('/update', 'update')
            ->name('usuario.update');
        Route::get('/destroy/{id}', 'destroy')
            ->name('usuario.destroy');
    });

require __DIR__ . '/auth.php';
