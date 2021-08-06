@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Tecnologia</h1>
            <a href="/home" class="btn btn-danger btn-sm">Voltar</a>
            <br>
            <a href="/tecnologia/cadastrar">Cadastrar nova tecnologia</a>
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
                @foreach($tecnologias as $tecnologia)
                <tr>
                    <td>
                        {{ $tecnologia->idTecnologia }}
                    </td>
                    <td>
                        {{ $tecnologia->nome }}
                    </td>
                    <td>
                        <a href="/tecnologia/visualizar/{{ $tecnologia->idTecnologia }}">VISUALIZAR</a>
                    </td>
                    <td>
                        <a href="/tecnologia/editar/{{ $tecnologia->idTecnologia }}">EDITAR</a>
                    </td>
                    <td>
                        <a href="/tecnologia/excluir/{{ $tecnologia->idTecnologia }}">EXCLUIR</a>
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
