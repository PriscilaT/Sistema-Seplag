<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;
use Carbon\Carbon;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::all();
        return view('cargos.index')->with('cargos', $cargos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargos.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cargo = new Cargo();
        $cargo->nome = request('nome');
        $cargo->descricao = request('descricao');

        $cargo->save();
    
        return redirect('/cargo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idCargo)
    {
        $cargo = Cargo::FindOrFail($idCargo);
        return view('cargos.visualizar')->with('cargo', $cargo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idCargo)
    {
        $cargo = cargo::FindOrFail($idCargo);
        return view('cargos.editar')->with('cargo', $cargo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idCargo)
    {
        $cargo = Cargo::FindOrFail($idCargo);
        $cargo->idCargo = request('idCargo');
        $cargo->nome = request('nome');

        $cargo->save();
    
        return redirect('/cargo');
    }


    public function excluir($idCargo)
    {
      $cargo = Cargo::findOrFail($idCargo);
      return view('cargos.excluir')->with('cargo', $cargo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCargo)
    {
        Cargo::FindOrFail($idCargo)->delete();
        return redirect('/cargo');
    }
}
