@extends('layouts.app')

@section('content')

<div style="display:flex">
@include('layouts.sidebar')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Instituições</h1>
            <a href="/" class="btn btn-danger btn-sm">Voltar</a>
            <br>
            <a href="/instituicao/cadastrar">Cadastrar nova Instituição</a>
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
                @foreach($instituicoes as $instituicao)
                <tr>
                    <td>
                        {{ $instituicao->idInstituicao }}
                    </td>
                    <td>
                        {{ $instituicao->nome }}
                    </td>
                    <td>
                        <a href="/instituicao/visualizar/{{ $instituicao->idInstituicao }}">VISUALIZAR</a>
                    </td>
                    <td>
                        <a href="/instituicao/editar/{{ $instituicao->idInstituicao }}">EDITAR</a>
                    </td>
                    <td>
                        <a href="/instituicao/excluir/{{ $instituicao->idInstituicao }}">EXCLUIR</a>
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
