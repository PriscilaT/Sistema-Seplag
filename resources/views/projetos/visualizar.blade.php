@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Vendo informações do projeto: {{ $projeto->nome }}</h1>

            <a href="/projeto" class="btn btn-danger btn-sm">Voltar</a>

            <br>
            Nome: {{ $projeto->nome }}
            <br>
            
        </div>
    </div>
</div>
@endsection