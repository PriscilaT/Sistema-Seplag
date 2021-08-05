@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Deseja EXCLUIR: {{ $funcionario->nome }}</h1>

            <a href="/funcionario" class="btn btn-danger btn-sm">Voltar</a>

            <br>

            Nome: {{ $funcionario->nome }}
            <br>
            
    

            <form action="{{ route('funcionario.destroy', $funcionario->idFuncionario) }}" method="POST">
                @method('DELETE')

                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="/funcionario" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Excluir</button>
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}">

            </form>
        </div>
    </div>
</div>
@endsection