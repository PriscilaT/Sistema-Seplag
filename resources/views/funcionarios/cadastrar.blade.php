@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Cadastrar Novo Funcionário</h1>

            <a href="/funcionario" class="btn btn-danger btn-sm">Voltar</a>

            <br>
            
            <form action="{{ route('funcionario.store') }}" method="POST">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nome">
                        Nome do Funcionário:
                    </label>
                    <input class="col-sm-9" type="text" name="nome">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="rg">
                        rg:
                    </label>
                    <input class="col-sm-9" type="text" name="rg">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="cpf">
                        cpf:
                    </label>
                    <input class="col-sm-9" type="text" name="cpf">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for=" nascimento">
                        nascimento:
                    </label>
                    <input type="date" name="nascimento">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="genero">
                        genero:
                    </label>
                    <input class="col-sm-9" type="text" name="genero">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="estado_civil">
                        estado civil:
                    </label>
                    <select name="estado_civil">
                        <option value="SOLTEIRO">Solteiro</option>
                        <option value="CASADO">Casado</option>
                        <option value="DIVORCIADO">Divorciado</option>
                        <option value="VIÚVO">Viúvo</option>
                        <option value="SEPARADO">Separado</option>
                        <option value="UNIÃO ESTÁVEL">União Estável</option>
                    </select>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="email">
                        email:
                    </label>
                    <input class="col-sm-9" type="email" name="email">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telefone">
                        telefone:
                    </label>
                    <input class="col-sm-9" type="text" name="telefone">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="cep">
                        cep:
                    </label>
                    <input class="col-sm-9" type="text" name="cep">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="rua">
                        rua:
                    </label>
                    <input class="col-sm-9" type="text" name="rua">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numero">
                        numero:
                    </label>
                    <input class="col-sm-9" type="text" name="numero">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="bairro">
                        bairro:
                    </label>
                    <input class="col-sm-9" type="text" name="bairro">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="cidade">
                        cidade:
                    </label>
                    <input class="col-sm-9" type="text" name="cidade">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="estado">
                        estado:
                    </label>
                    <input class="col-sm-9" type="text" name="estado">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="complemento">
                        complemento:
                    </label>
                    <textarea class="col-sm-9" name="complemento" rows="4"></textarea>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="senha">
                        senha:
                    </label>
                    <input class="col-sm-9" type="password" name="senha">
                </div>

                

                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="/funionarios" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}">

            </form>
        </div>
    </div>
</div>
@endsection