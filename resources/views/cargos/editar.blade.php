@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Editar os dados do cargo: {{ $cargo->nome }}</h1>

            <a href="/cargo" class="btn btn-danger btn-sm">Voltar</a>

            <br>

            <form action="{{ route('cargo.update', $cargo->idCargo) }}" method="POST">
                @method('PATCH')
                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nome">
                        Nome do cargo:
                    </label>
                    <input  value="<?= $cargo->nome  ?>" class="col-sm-9" type="text" name="nome">
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="/cargo" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
</div>
@endsection