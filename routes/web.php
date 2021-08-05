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
## Rotas do funcionário ###
###########################
Route::get ('/funcionario', 'FuncionarioController@index');
Route::get('/funcionario/cadastrar', 'FuncionarioController@create');
//Route::get('visualizar/{id}', 'InstitutoController@show');
//Route::get('/institutos/editar/{id}', 'InstitutoController@edit')->middleware('admin');
//Route::get('/institutos/excluir/{id}', 'InstitutoController@excluir')->middleware('admin');

Route::post('/funcionario/cadastrar', 'FuncionarioController@store')->name("funcionario.store");
//Route::patch('/institutos/editar/{id}', 'InstitutoController@update')->name("institutos.update")->middleware('admin');
//Route::delete('/institutos/{id}', 'InstitutoController@destroy')->name("institutos.destroy")->middleware('admin');

###########################
## Rotas do curso #########
###########################
Route::get ('/curso', 'CursoController@index');
Route::get('/curso/cadastrar', 'CursoController@create');
Route::post('/curso/cadastrar', 'CursoController@store')->name("curso.store");

###########################
## Rotas da instituicao ###
###########################
Route::get ('/instituicao', 'InstituicaoController@index');
Route::get('/instituicao/cadastrar', 'InstituicaoController@create');
Route::post('/instituicao/cadastrar', 'InstituicaoController@store')->name("instituicao.store");

###########################
## Rotas de tecnologia ####
###########################
Route::get ('/tecnologia', 'TecnologiaController@index');
Route::get('/tecnologia/cadastrar', 'TecnologiaController@create');
Route::post('/tecnologia/cadastrar', 'TecnologiaController@store')->name("tecnologia.store");

###########################
## Rotas de cargo #########
###########################
Route::get ('/cargo', 'CargoController@index');
Route::get('/cargo/cadastrar', 'CargoController@create');
Route::post('/cargo/cadastrar', 'CargoController@store')->name("cargo.store");

###########################
## Rotas de projeto #########
###########################
Route::get ('/projeto', 'ProjetoController@index');
Route::get('/projeto/cadastrar', 'ProjetoController@create');
Route::post('/projeto/cadastrar', 'ProjetoController@store')->name("projeto.store");

