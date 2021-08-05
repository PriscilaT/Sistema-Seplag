@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Vendo informações do funcionário: {{ $funcionario->nome }}</h1>

            <a href="/funcionario" class="btn btn-danger btn-sm">Voltar</a>

            <br>
            Nome: {{ $funcionario->nome }}
            <br>
            
        </div>
    </div>
</div>
@endsection