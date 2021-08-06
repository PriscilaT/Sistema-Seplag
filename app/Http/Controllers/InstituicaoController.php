<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instituicao;
use Carbon\Carbon;

class InstituicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instituicoes = Instituicao::all();
        return view('instituicoes.index')->with('instituicoes', $instituicoes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instituicoes.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instituicao = new Instituicao();
        $instituicao->nome = request('nome');

        $instituicao->save();
    
        return redirect('/instituicao');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idInstituicao)
    {
        $instituicao = Instituicao::FindOrFail($idInstituicao);
        return view('instituicoes.visualizar')->with('instituicao', $instituicao);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idInstituicao)
    {
        $instituicao = Instituicao::FindOrFail($idInstituicao);
        return view('instituicoes.editar')->with('instituicao', $instituicao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idInstituicao)
    {
        $instituicao = Instituicao::FindOrFail($idInstituicao);
        $instituicao->idInstituicao = request('idInstituicao');
        $instituicao->nome = request('nome');

        $instituicao->save();
    
        return redirect('/instituicao');
    }


    public function excluir($idInstituicao)
    {
      $instituicao = Instituicao::findOrFail($idInstituicao);
      return view('instituicoes.excluir')->with('instituicao', $instituicao);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idInstituicao)
    {
        Instituicao::FindOrFail($idInstituicao)->delete();
        return redirect('/instituicao');
    }
}
