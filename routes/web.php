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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'TabeliaoController@index')
->name('admin.listarTabeliao');

Route::get('/tabeliaos/adicionar', 'TabeliaoController@adicionar')
->name('admin.adicionarTabeliao');

Route::post('/tabeliaos/salvar', 'TabeliaoController@salvar')
->name('admin.salvarTabeliao');

Route::get('/tabeliaos/editar/{id}', 'TabeliaoController@editar')
->name('admin.editarTabeliao');

Route::put('/tabeliaos/atualizar/{id}', 'TabeliaoController@atualizar')
->name('admin.atualizarTabeliao');

Route::delete('/tabeliaos/deletar/{id}', 'TabeliaoController@deletar')
->name('admin.deletarTabeliao');
