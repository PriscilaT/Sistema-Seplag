@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Editar os dados do funcionário: {{ $funcionario->nome }}</h1>

            <a href="/funcionario" class="btn btn-danger btn-sm">Voltar</a>

            <br>

            <form action="{{ route('funcionario.update', $funcionario->idFuncionario) }}" method="POST">
                @method('PATCH')
                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nome">
                        Nome do Funcionário:
                    </label>
                    <input value="<?= $funcionario->nome ?>" class="col-sm-9" type="text" name="nome">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="rg">
                        rg:
                    </label>
                    <input style="background: rgba(0, 0, 0, 0); border: 1px solid #aaa" value="<?= $funcionario->rg ?>" class="col-sm-9" type="text" name="rg">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="cpf">
                        cpf:
                    </label>
                    <input disabled style="border: none; background: none" value="<?= $funcionario->cpf ?>" class="col-sm-9" type="text" name="cpf">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for=" nascimento">
                        nascimento:
                    </label>

                    <input value="<?= $funcionario->nascimento ?>" class="col-sm-9" type="text" name=" nascimento">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="genero">
                        genero:
                    </label>
                    <input value="<?= $funcionario->genero ?>" class="col-sm-9" type="text" name="genero">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="estado_civil">
                        estado_civil:
                    </label>
                    <?php 
                        $estadoCivil = $funcionario->estado_civil;
                        ucfirst($estadoCivil);
                    ?>
                    <input value="<?= $estadoCivil ?>" class="col-sm-9" type="text" name="estado_civil">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="email">
                        email:
                    </label>
                    <input value="<?= $funcionario->email ?>" class="col-sm-9" type="text" name="email">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telefone">
                        telefone:
                    </label>
                    <input value="<?= $funcionario->telefone ?>" class="col-sm-9" type="text" name="telefone">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="cep">
                        cep:
                    </label>
                    <input value="<?= $funcionario->cep ?>" class="col-sm-9" type="text" name="cep">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="rua">
                        rua:
                    </label>
                    <input value="<?= $funcionario->rua ?>" class="col-sm-9" type="text" name="rua">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numero">
                        numero:
                    </label>
                    <input value="<?= $funcionario->numero ?>" class="col-sm-9" type="text" name="numero">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="bairro">
                        bairro:
                    </label>
                    <input value="<?= $funcionario->bairro ?>" class="col-sm-9" type="text" name="bairro">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="cidade">
                        cidade:
                    </label>
                    <input value="<?= $funcionario->cidade ?>" class="col-sm-9" type="text" name="cidade">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="estado">
                        estado:
                    </label>
                    <input value="<?= $funcionario->estado ?>" class="col-sm-9" type="text" name="estado">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="complemento">
                        complemento:
                    </label>
                    <textarea class="col-sm-9" name="complemento" rows="4"><?= $funcionario->complemento ?></textarea>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="/funcionario" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
</div>
@endsection