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
Route::get('/funcionario/visualizar/{idFuncionario}', 'FuncionarioController@show');
Route::get('/funcionario/editar/{idFuncionario}', 'FuncionarioController@edit');
Route::get('/funcionario/excluir/{idFuncionario}', 'FuncionarioController@excluir');

Route::post('/funcionario/cadastrar', 'FuncionarioController@store')->name("funcionario.store");
Route::patch('/funcionarios/editar/{idFuncionario}', 'FuncionarioController@update')->name("funcionario.update");
Route::delete('/funcionario/{idFuncionario}', 'FuncionarioController@destroy')->name("funcionario.destroy");


###########################
## Rotas do curso #########
###########################
Route::get ('/curso', 'CursoController@index');
Route::get('/curso/cadastrar', 'CursoController@create');
Route::get('/curso/visualizar/{idCurso}', 'CursoController@show');
Route::get('/curso/editar/{idCurso}', 'CursoController@edit');
Route::get('/curso/excluir/{idCurso}', 'CursoController@excluir');

Route::post('/curso/cadastrar', 'CursoController@store')->name("curso.store");
Route::patch('/cursos/editar/{idCurso}', 'CursoController@update')->name("curso.update");
Route::delete('/curso/{idCurso}', 'CursoController@destroy')->name("curso.destroy");

###########################
## Rotas da instituicao ###
###########################
Route::get ('/instituicao', 'InstituicaoController@index');
Route::get('/instituicao/cadastrar', 'InstituicaoController@create');
Route::get('/instituicao/visualizar/{idInstituicao}', 'InstituicaoController@show');
Route::get('/instituicao/editar/{idInstituicao}', 'InstituicaoController@edit');
Route::get('/instituicao/excluir/{idInstituicao}', 'InstituicaoController@excluir');

Route::post('/instituicao/cadastrar', 'InstituicaoController@store')->name("instituicao.store");
Route::patch('/instituicao/editar/{idInstituicao}', 'InstituicaoController@update')->name("instituicao.update");
Route::delete('/instituicao/{idInstituicao}', 'InstituicaoController@destroy')->name("instituicao.destroy");

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
## Rotas de projeto #######
###########################
Route::get ('/projeto', 'ProjetoController@index');
Route::get('/projeto/cadastrar', 'ProjetoController@create');
Route::post('/projeto/cadastrar', 'ProjetoController@store')->name("projeto.store");
