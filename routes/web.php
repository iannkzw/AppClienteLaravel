<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/cliente', 'ClienteController@index')->name('cliente.index');
Route::get('/cliente/detalhe/{id}', 'ClienteController@detalhe')->name('cliente.detalhe');
Route::get('/cliente/adicionar', 'ClienteController@adicionar')->name('cliente.adicionar');
Route::post('/cliente/salvar', 'ClienteController@salvar')->name('cliente.salvar');
Route::get('/cliente/editar/{id}', 'ClienteController@editar')->name('cliente.editar');
Route::put('/cliente/atualizar/{id}', 'ClienteController@atualizar')->name('cliente.atualizar');
Route::get('/cliente/deletar/{id}', 'ClienteController@deletar')->name('cliente.deletar');

Route::get('/servico', 'ServicoController@index')->name('servico.index');
Route::get('/servico/adicionar/{id}', 'ServicoController@adicionar')->name('servico.adicionar');
Route::post('/servico/salvar/{id}', 'ServicoController@salvar')->name('servico.salvar');
Route::get('/servico/editar/{id}', 'ServicoController@editar')->name('servico.editar');
Route::put('/servico/atualizar/{id}', 'ServicoController@atualizar')->name('servico.atualizar');
Route::get('/servico/deletar/{id}', 'ServicoController@deletar')->name('servico.deletar');
