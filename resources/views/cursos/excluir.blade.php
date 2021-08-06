@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Deseja EXCLUIR: {{ $curso->nome }}</h1>

            <a href="/curso" class="btn btn-danger btn-sm">Voltar</a>

            <br>

            Nome: {{ $curso->nome }}
            <br>
            
    

            <form action="{{ route('curso.destroy', $curso->idCurso) }}" method="POST">
                @method('DELETE')

                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="/curso" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Excluir</button>
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}">

            </form>
        </div>
    </div>
</div>
@endsection