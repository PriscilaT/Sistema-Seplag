<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use Carbon\Carbon;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index')->with('funcionarios', $funcionarios);
        //return view('index', ['funcionarios'=>$funcionarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionarios.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funcionario = new Funcionario();
         //dd(request()->all()['idFuncionario']);
        $funcionario->idFuncionario = request('idFuncionario');
        $funcionario->nome = request('nome');
        $funcionario->rg = request('rg');
        $funcionario->cpf = request('cpf');
        $funcionario->nascimento = request('nascimento');
        $funcionario->genero = request('genero');
        $funcionario->estado_civil = request('estado_civil');
        $funcionario->email = request('email');
        $funcionario->telefone = request('telefone');
        $funcionario->cep = request('cep');
        $funcionario->rua = request('rua');
        $funcionario->n° = request('n°');
        $funcionario->bairro = request('bairro');
        $funcionario->cidade = request('cidade');
        $funcionario->estado = request('estado');
        $funcionario->observação = request('observação');

        $funcionario->save();
    
        return redirect('/funcionario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idFuncionario)
    {
        $funcionario = Funcionario::FindOrFail($idFuncionario);
        return view('funcionarios.visualizar')->with('funcionario', $funcionario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idFuncionario)
    {
        $funcionario = Funcionario::FindOrFail($idFuncionario);
        return view('funcionarios.editar')->with('funcionario', $funcionario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idFuncionario)
    {
        $funcionario = Funcionario::FindOrFail($idFuncionario);
        $funcionario->idFuncionario = request('idFuncionario');
        $funcionario->nome = request('nome');
        $funcionario->rg = request('rg');
        $funcionario->cpf = request('cpf');
        $funcionario->nascimento = request('nascimento');
        $funcionario->genero = request('genero');
        $funcionario->estado_civil = request('estado_civil');
        $funcionario->email = request('email');
        $funcionario->telefone = request('telefone');
        $funcionario->cep = request('cep');
        $funcionario->rua = request('rua');
        $funcionario->n° = request('n°');
        $funcionario->bairro = request('bairro');
        $funcionario->cidade = request('cidade');
        $funcionario->estado = request('estado');
        $funcionario->observação = request('observação');

        $funcionario->save();
   
       return redirect('/funcionario');
    }


    public function excluir($idFuncionario)
    {
      $funcionario = Funcionario::findOrFail($idFuncionario);
      return view('funcionarios.excluir')->with('funcionario', $funcionario);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idFuncionario)
    {
        Funcionario::FindOrFail($idFuncionario)->delete();
        return redirect('/funcionario');
    }
}
