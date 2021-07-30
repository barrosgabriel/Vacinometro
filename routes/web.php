<?php

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

use Illuminate\Database\Eloquent\Collection;

Route::get('/', 'VacinacaoController@index')->name('vacinacao.cadastro');

// Route::get('/vacinacao', 'VacinacaoController@index')->name('vacinacao.cadastro');
Route::get('/show', 'VacinacaoController@show')->name('vacinacao.show');
Route::get('/edit/{id}', 'VacinacaoController@edit')->name('vacinacao.edit');
Route::put('/update', 'VacinacaoController@update')->name('vacinacao.update');
Route::get('/cadastro', 'VacinacaoController@create')->name('vacinacao.create');
Route::post('/cadastro/salvar', 'VacinacaoController@store')->name('vacinacao.store');
Route::get('/gerenciador', 'VacinacaoController@menu')->name('vacinacao.menu')->middleware('auth');
Route::get('/auditoria','AuditController@index')->name('vacinacao.audit')->middleware('auth');




Auth::routes();
