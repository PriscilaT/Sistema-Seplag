@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Projetos</h1>
            <a href="/home" class="btn btn-danger btn-sm">Voltar</a>
            <br>
            <a href="/projeto/cadastrar">Cadastrar novo projeto</a>
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
                @foreach($projetos as $projeto)
                <tr>
                    <td>
                        {{ $projeto->idProjeto }}
                    </td>
                    <td>
                        {{ $projeto->nome }}
                    </td>
                    <td>
                        <a href="/projeto/visualizar/{{ $projeto->idProjeto }}">VISUALIZAR</a>
                    </td>
                    <td>
                        <a href="/projeto/editar/{{ $projeto->idProjeto }}">EDITAR</a>
                    </td>
                    <td>
                        <a href="/projeto/excluir/{{ $projeto->idProjeto }}">EXCLUIR</a>
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection