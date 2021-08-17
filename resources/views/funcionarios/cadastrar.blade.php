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
                        Nome do Funcionário*:
                    </label>
                    <input value="{{ old('nome') }}" class="col-sm-9" type="text" name="nome">
                    @error('nome')
                        <small class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="rg">
                        rg*:
                    </label>
                    <input value="{{ old('rg') }}" class="col-sm-9" type="text" name="rg">
                    @error('rg')
                        <small class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="cpf">
                        cpf*:
                    </label>
                    <input value="{{ old('cpf') }}" class="col-sm-9" type="text" name="cpf">
                    @error('cpf')
                        <small class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for=" nascimento">
                        nascimento*:
                    </label>
                    <input value="{{ old('nascimento') }}" type="date" name="nascimento">
                    @error('nascimento')
                        <small class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="genero">
                        genero:
                    </label>
                    <input value="{{ old('genero') }}" class="col-sm-9" type="text" name="genero">
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
                        email*:
                    </label>
                    <input value="{{ old('email') }}" class="col-sm-9" type="email" name="email">
                    @error('email')
                        <small class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telefone">
                        telefone*:
                    </label>
                    <input value="{{ old('telefone') }}" class="col-sm-9" type="text" name="telefone">
                    @error('telefone')
                        <small class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="cep">
                        cep*:
                    </label>
                    <input value="{{ old('cep') }}" class="col-sm-9" type="text" name="cep">
                    @error('cep')
                        <small class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="rua">
                        rua*:
                    </label>
                    <input value="{{ old('rua') }}" class="col-sm-9" type="text" name="rua">
                    @error('rua')
                        <small class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numero">
                        numero*:
                    </label>
                    <input value="{{ old('numero') }}" class="col-sm-9" type="text" name="numero">
                    @error('numero')
                        <small class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="bairro">
                        bairro*:
                    </label>
                    <input value="{{ old('bairro') }}" class="col-sm-9" type="text" name="bairro">
                    @error('bairro')
                        <small class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="cidade">
                        cidade*:
                    </label>
                    <input value="{{ old('cidade') }}" class="col-sm-9" type="text" name="cidade">
                    @error('cidade')
                        <small class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="estado">
                        estado*:
                    </label>
                    <input value="{{ old('estado') }}" class="col-sm-9" type="text" name="estado">
                    @error('estado')
                        <small class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="complemento">
                        complemento:
                    </label>
                    <textarea class="col-sm-9" name="complemento" rows="4">{{ old('complemento') }}</textarea>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="senha">
                        senha:
                    </label>
                    <input class="col-sm-9" type="password" id="senha" name="senha">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="senha_confirmation">
                        confirmar senha:
                    </label>
                    <input class="col-sm-9" type="password" id="senha_confirmation" name="senha_confirmation">

                    @error('senha')
                        <small class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="/funcionario" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}">

            </form>
        </div>
    </div>
</div>
@endsection