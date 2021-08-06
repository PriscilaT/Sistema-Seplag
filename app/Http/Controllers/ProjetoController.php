<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projeto;
use Carbon\Carbon;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projetos = Projeto::all();
        return view('projetos.index')->with('projetos', $projetos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projetos.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projeto = new Projeto();
        $projeto->nome = request('nome');
        $projeto->inicio = request('inicio');
        $projeto->fim = request('fim');
        $projeto->status = request('status');

        $projeto->save();
    
        return redirect('/projeto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idProjeto)
    {
        $projeto = Projeto::FindOrFail($idProjeto);
        return view('projetos.visualizar')->with('projeto', $projeto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idProjeto)
    {
        $projeto = Projeto::FindOrFail($idProjeto);        
        return view('projetos.editar')->with('projeto', $projeto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idProjeto)
    {
        $projeto = Projeto::FindOrFail($idProjeto);
        $projeto->idprojeto = request('idProjeto');
        $projeto->nome = request('nome');

        $projeto->save();
    
        return redirect('/projeto');
    }

    public function excluir($idProjeto)
    {
      $projeto = projeto::findOrFail($idProjeto);
      return view('projetos.excluir')->with('projeto', $projeto);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idProjeto)
    {
        Projeto::FindOrFail($idProjeto)->delete();
        return redirect('/projeto');
    
    }
}
