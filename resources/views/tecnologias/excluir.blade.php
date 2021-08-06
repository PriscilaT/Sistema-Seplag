@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Deseja EXCLUIR: {{ $tecnologia->nome }}</h1>

            <a href="/tecnologia" class="btn btn-danger btn-sm">Voltar</a>

            <br>

            Nome: {{ $tecnologia->nome }}
            <br>

            <form action="{{ route('tecnologia.destroy', $tecnologia->idTecnologia) }}" method="POST">
                @method('DELETE')

                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="/tecnologia" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Excluir</button>
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}">

            </form>
        </div>
    </div>
</div>
@endsection