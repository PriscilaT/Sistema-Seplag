@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Cadastrar Novo Projeto</h1>

            <a href="/projeto" class="btn btn-danger btn-sm">Voltar</a>

            <br>
            
            <form action="{{ route('projeto.store') }}" method="POST">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nome">
                        Nome do Projeto:
                    </label>
                    <input class="col-sm-9" type="text" name="nome">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="descricao">
                        Descrição:
                    </label>
                    <textarea class="col-sm-9" name="descricao" rows="4"></textarea>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="inicio">
                        Inicio:
                    </label>
                    <input type="date" class="col-sm-9" name="inicio" ></input>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="fim">
                        Fim:
                    </label>
                    <input type="date" class="col-sm-9" name="fim" ></input>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="fim">
                        Status:
                    </label>
                    <select name="status">
                        <option value="NÃO INICIADO">Não iniciado</option>
                        <option value="EM ANDAMENTO">Em andamento</option>
                        <option value="FINALIZADO">Finalizado</option>
                    </select>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="/projeto" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}">

            </form>
        </div>
    </div>
</div>
@endsection