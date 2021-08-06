@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Cursos</h1>
            <a href="/" class="btn btn-danger btn-sm">Voltar</a>
            <br>
            <a href="/curso/cadastrar">Cadastrar novo curso</a>
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
                @foreach($cursos as $curso)
                <tr>
                    <td>
                        {{ $curso->idCurso }}
                    </td>
                    <td>
                        {{ $curso->nome }}
                    </td>
                    <td>
                        <a href="/curso/visualizar/{{ $curso->idCurso }}">VISUALIZAR</a>
                    </td>
                    <td>
                        <a href="/curso/editar/{{ $curso->idCurso }}">EDITAR</a>
                    </td>
                    <td>
                        <a href="/curso/excluir/{{ $curso->idCurso }}">EXCLUIR</a>
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
