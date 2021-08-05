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
//Route::get('visualizar/{id}', 'InstitutoController@show');
//Route::get('/institutos/editar/{id}', 'InstitutoController@edit')->middleware('admin');
//Route::get('/institutos/excluir/{id}', 'InstitutoController@excluir')->middleware('admin');

Route::post('/funcionario/cadastrar', 'FuncionarioController@store')->name("funcionario.store");
//Route::patch('/institutos/editar/{id}', 'InstitutoController@update')->name("institutos.update")->middleware('admin');
//Route::delete('/institutos/{id}', 'InstitutoController@destroy')->name("institutos.destroy")->middleware('admin');