<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Carbon\Carbon;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index')->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->nome = request('nome');

        $curso->save();
    
        return redirect('/curso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idCurso)
    {
        $curso = Curso::FindOrFail($idCurso);
        return view('cursos.visualizar')->with('curso', $curso);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idCurso)
    {
        $curso = Curso::FindOrFail($idCurso);        
        return view('cursos.editar')->with('curso', $curso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idCurso)
    {
        $curso = Curso::FindOrFail($idCurso);
        $curso->nome = request('nome');

        $curso->save();
    
        return redirect('/curso');
    }


    public function excluir($idCurso)
    {
      $curso = Curso::findOrFail($idCurso);
      return view('cursos.excluir')->with('curso', $curso);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCurso)
    {
        Curso::FindOrFail($idCurso)->delete();
        return redirect('/curso');
    }
}
