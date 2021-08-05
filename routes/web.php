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

Route::get('/home', 'HomeController@index')->name('home');

###########################
## Rotas do funcionário ##
###########################
Route::get ('/funcionario', 'FuncionarioController@index');
Route::get('/funcionario/cadastrar', 'FuncionarioController@create');
Route::get('/funcionario/visualizar/{idFuncionario}', 'FuncionarioController@show');
Route::get('/funcionario/editar/{idFuncionario}', 'FuncionarioController@edit');
Route::get('/funcionario/excluir/{idFuncionario}', 'FuncionarioController@excluir');

Route::post('/funcionario/cadastrar', 'FuncionarioController@store')->name("funcionario.store");
Route::patch('/funcionarios/editar/{idFuncionario}', 'FuncionarioController@update')->name("funcionario.update");
Route::delete('/funcionario/{idFuncionario}', 'FuncionarioController@destroy')->name("funcionario.destroy");