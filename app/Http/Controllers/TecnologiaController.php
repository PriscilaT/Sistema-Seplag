<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tecnologia;
use Carbon\Carbon;

class TecnologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnologias = Tecnologia::all();
        return view('tecnologias.index')->with('tecnologias', $tecnologias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tecnologias.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tecnologia = new Tecnologia();
        $tecnologia->nome = request('nome');
        $tecnologia->descricao = request('descricao');

        $tecnologia->save();
    
        return redirect('/tecnologia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idTecnologia)
    {
        $tecnologia = Tecnologia::FindOrFail($idTecnologia);
        return view('tecnologias.visualizar')->with('tecnologia', $tecnologia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idTecnologia)
    {
        $tecnologia = Tecnologia::FindOrFail($idTecnologia);
        return view('tecnologias.editar')->with('tecnologia', $tecnologia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idTecnologia)
    {
        $tecnologia = Tecnologia::FindOrFail($idTecnologia);

        $tecnologia->save();

        return redirect('/tecnologia');
    }

    public function excluir($idTecnologia)
    {
      $tecnologia = Tecnologia::findOrFail($idTecnologia);
      return view('tecnologias.excluir')->with('tecnologia', $tecnologia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idTecnologia)
    {
        Tecnologia::FindOrFail($idTecnologia)->delete();
        return redirect('/tecnologia');
    }
}
