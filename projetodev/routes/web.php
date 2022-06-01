<?php

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


use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\RacaController;
use App\Http\Controllers\PelagemController;
use App\Http\Controllers\TamanhoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PagamentoController;
use Illumiante\Support\Facades\Auth;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    if(auth()->check()){return view('index');}else{return view('login');}
});

Route::post('/logar', [UserController::class, 'logar']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/index', [UserController::class, 'index']);


Route::get('/pedidosfinalizados',  [PedidoController::class, 'listar']);
Route::get('/cadastrarpedido', [PedidoController::class, 'cadastrar']);
Route::post('/salvarpedido', [PedidoController::class, 'store']);
Route::get('/singlepedido/{id}', [PedidoController::class, 'singlepedido']);

Route::get('/pagamentos', [PagamentoController::class, 'listar']);
Route::get('/cadastrarpagamento', [PagamentoController::class, 'cadastrar']);
Route::post('/salvarpagamento', [PagamentoController::class, 'salvarpagamento']);
Route::delete('/excluirpagamento/{id}', [PagamentoController::class, 'destroy']);


Route::get('/servicos', [ServicoController::class, 'listar']);
Route::get('/cadastrarservico', [ServicoController::class, 'cadastrar']);
Route::post('/salvarservico', [ServicoController::class, 'salvarservico']);
Route::delete('/excluirservico/{id}', [ServicoController::class, 'destroy']);


Route::get('/clientes', [ClientController::class, 'listar']);
Route::get('/cadastrarcliente', [ClientController::class, 'cadastrar']);
Route::get('/cadastrarend/{id}', [ClientController::class, 'cadastrarend']);
Route::get('/cadastrartel/{id}', [ClientController::class, 'cadastrartel']);
Route::post('/salvarcliente', [ClientController::class, 'store']);
Route::post('/salvarendereco', [ClientController::class, 'storeendereco']);
Route::post('/salvartelefone', [ClientController::class, 'storetelefone']);
Route::delete('/excluircliente/{id}', [ClientController::class, 'destroy']);
Route::delete('/excluirendereco/{id}', [ClientController::class, 'destroyendereco']);
Route::delete('/excluirtelefone/{id}', [ClientController::class, 'destroytelefone']);
Route::get('/singlecliente/{id}', [ClientController::class, 'singlecliente']);


Route::get('/pets', [PetController::class, 'listar']);
Route::get('/cadastrarpet', [PetController::class, 'cadastrar']);
Route::post('/salvarpet', [PetController::class, 'store']);
Route::delete('/excluirpet/{id}', [PetController::class, 'destroy']);
Route::get('/singlepett/{id}', [PetController::class, 'singlepett']);


Route::get('/racas', [RacaController::class, 'listar']);
Route::get('/cadastrarraca', [RacaController::class, 'cadastrar']);
Route::post('/salvarraca', [RacaController::class, 'store']);
Route::delete('/excluirraca/{id}', [RacaController::class, 'destroy']);


Route::get('/tamanhos', [TamanhoController::class, 'listar']);
Route::get('/cadastrartamanho', [TamanhoController::class, 'cadastrar']);
Route::post('/salvartamanho', [TamanhoController::class, 'store']);
Route::delete('/excluirtamanho/{id}', [TamanhoController::class, 'destroy']);


Route::get('/pelagens', [PelagemController::class, 'listar']);
Route::get('/cadastrarpelagem', [PelagemController::class, 'cadastrar']);
Route::post('/salvarpelagem', [PelagemController::class, 'store']);
Route::delete('/excluirpelagem/{id}', [PelagemController::class, 'destroy']);

