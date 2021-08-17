@extends('layouts.app')

@section('content')

<div style="display:flex">
@include('layouts.sidebar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Cargos</h1>
            <a href="/home" class="btn btn-danger btn-sm">Voltar</a>
            <br>
            <a href="/cargo/cadastrar">Cadastrar novo cargo</a>
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
                @foreach($cargos as $cargo)
                <tr>
                    <td>
                        {{ $cargo->idCargo}}
                    </td>
                    <td>
                        {{ $cargo->nome }}
                    </td>
                    <td>
                        <a href="/cargo/visualizar/{{ $cargo->idCargo}}">VISUALIZAR</a>
                    </td>
                    <td>
                        <a href="/cargo/editar/{{ $cargo->idCargo}}">EDITAR</a>
                    </td>
                    <td>
                        <a href="/cargo/excluir/{{ $cargo->idCargo}}">EXCLUIR</a>
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
