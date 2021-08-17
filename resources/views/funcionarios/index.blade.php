@extends('layouts.app')
@section('content')

<div style="display:flex">
@include('layouts.sidebar')


<div class="container">
    <div class="row justify-content-center">
  
        <div class="col-md-8">
                
            <h1>Funcionários</h1>
            <a href="/home" class="btn btn-danger btn-sm">Voltar</a>
            <br>
            <a href="/funcionario/cadastrar">Cadastrar Funcionário</a>
            <table class="table table-hover">
                <thead class="thead-dark">
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        NOME
                    </th>
                    <th>
                        VISUALIZAR
                    </th>
                    <th>
                        EDITAR
                    </th>
                    <th>
                        EXCLUIR
                    </th>
                </tr>
                </thead>

                <tbody>
                @foreach($funcionarios as $funcionario)
                <tr>
                    <td>
                        {{ $funcionario->idFuncionario }}
                    </td>
                    <td>
                        {{ $funcionario->nome }}
                    </td>
                    <td>
                        <a href="/funcionario/visualizar/{{ $funcionario->idFuncionario }}">VISUALIZAR</a>
                    </td>
                    <td>
                        <a href="/funcionario/editar/{{ $funcionario->idFuncionario }}">EDITAR</a>
                    </td>
                    <td>
                        <a href="/funcionario/excluir/{{ $funcionario->idFuncionario }}">EXCLUIR</a>
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
</div>
@endsection