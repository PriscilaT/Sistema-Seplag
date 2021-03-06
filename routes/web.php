<?php

session_start();

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureAdmin;

// Auth::routes();

Route::get('/', 'LoginController@index');
Route::post('/', 'LoginController@create')->name('login.login');

Route::middleware(EnsureAdmin::class)->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    ## Rotas do funcionário
    Route::get('/funcionario/cadastrar', 'FuncionarioController@create');
    Route::get ('/funcionario', 'FuncionarioController@index');
    Route::get('/funcionario/visualizar/{idFuncionario}', 'FuncionarioController@show');
    Route::get('/funcionario/editar/{idFuncionario}', 'FuncionarioController@edit');
    Route::get('/funcionario/excluir/{idFuncionario}', 'FuncionarioController@excluir');
    Route::post('/funcionario/cadastrar', 'FuncionarioController@store')->name("funcionario.store");
    Route::patch('/funcionarios/editar/{idFuncionario}', 'FuncionarioController@update')->name("funcionario.update");
    Route::delete('/funcionario/{idFuncionario}', 'FuncionarioController@destroy')->name("funcionario.destroy");

    ## Rotas do curso 
    Route::get ('/curso', 'CursoController@index');
    Route::get('/curso/cadastrar', 'CursoController@create');
    Route::get('/curso/visualizar/{idCurso}', 'CursoController@show');
    Route::get('/curso/editar/{idCurso}', 'CursoController@edit');
    Route::get('/curso/excluir/{idCurso}', 'CursoController@excluir');
    Route::post('/curso/cadastrar', 'CursoController@store')->name("curso.store");
    Route::patch('/cursos/editar/{idCurso}', 'CursoController@update')->name("curso.update");
    Route::delete('/curso/{idCurso}', 'CursoController@destroy')->name("curso.destroy");
    
    ## Rotas da instituicao ###
    Route::get ('/instituicao', 'InstituicaoController@index');
    Route::get('/instituicao/cadastrar', 'InstituicaoController@create');
    Route::get('/instituicao/visualizar/{idInstituicao}', 'InstituicaoController@show');
    Route::get('/instituicao/editar/{idInstituicao}', 'InstituicaoController@edit');
    Route::get('/instituicao/excluir/{idInstituicao}', 'InstituicaoController@excluir');
    Route::post('/instituicao/cadastrar', 'InstituicaoController@store')->name("instituicao.store");
    Route::patch('/instituicao/editar/{idInstituicao}', 'InstituicaoController@update')->name("instituicao.update");
    Route::delete('/instituicao/{idInstituicao}', 'InstituicaoController@destroy')->name("instituicao.destroy");

    ## Rotas de tecnologia ####
    Route::get ('/tecnologia', 'TecnologiaController@index');
    Route::get('/tecnologia/cadastrar', 'TecnologiaController@create');
    Route::get('/tecnologia/visualizar/{idTecnologia}', 'TecnologiaController@show');
    Route::get('/tecnologia/editar/{idTecnologia}', 'TecnologiaController@edit');
    Route::get('/tecnologia/excluir/{idTecnologia}', 'TecnologiaController@excluir');
    Route::post('/tecnologia/cadastrar', 'TecnologiaController@store')->name("tecnologia.store");
    Route::patch('/tecnologia/editar/{idTecnologia}', 'TecnologiaController@update')->name("tecnologia.update");
    Route::delete('/tecnologia/{idTecnologia}', 'TecnologiaController@destroy')->name("tecnologia.destroy");
    
    ## Rotas de cargo 
    Route::get ('/cargo', 'CargoController@index');
    Route::get('/cargo/cadastrar', 'CargoController@create');
    Route::get('/cargo/visualizar/{idCargo}', 'CargoController@show');
    Route::get('/cargo/editar/{idCargo}', 'CargoController@edit');
    Route::get('/cargo/excluir/{idCargo}', 'CargoController@excluir');
    Route::post('/cargo/cadastrar', 'CargoController@store')->name("cargo.store");
    Route::patch('/cargo/editar/{idCargo}', 'CargoController@update')->name("cargo.update");
    Route::delete('/cargo/{idCargo}', 'CargoController@destroy')->name("cargo.destroy");
    
    ## Rotas de projeto #######
    Route::get ('/projeto', 'ProjetoController@index');
    Route::get('/projeto/cadastrar', 'ProjetoController@create');
    Route::get('/projeto/visualizar/{idProjeto}', 'ProjetoController@show');
    Route::get('/projeto/editar/{idProjeto}', 'ProjetoController@edit');
    Route::get('/projeto/excluir/{idProjeto}', 'ProjetoController@excluir');
    Route::post('/projeto/cadastrar', 'ProjetoController@store')->name("projeto.store");
    Route::patch('/projeto/editar/{idProjeto}', 'ProjetoController@update')->name("projeto.update");
    Route::delete('/projeto/{idProjeto}', 'ProjetoController@destroy')->name("projeto.destroy");
});
