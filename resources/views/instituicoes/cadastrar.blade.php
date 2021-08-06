@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Cadastrar Nova Instituição</h1>

            <a href="/instituicao" class="btn btn-danger btn-sm">Voltar</a>

            <br>
            
            <form action="{{ route('instituicao.store') }}" method="POST">

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="idinstituição">
                        ID da Instituicao:
                    </label>
                    <input class="col-sm-9" type="text" name="idInstituição">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nome">
                        Nome da Instituicao:
                    </label>
                    <input class="col-sm-9" type="text" name="nome">
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="/instituicao" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}">

            </form>
        </div>
    </div>
</div>
@endsection