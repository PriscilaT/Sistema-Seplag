@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Vendo informações da tecnologia: {{ $tecnologia->nome }}</h1>

            <a href="/tecnologia" class="btn btn-danger btn-sm">Voltar</a>

            <br>
            Nome: {{ $tecnologia->nome }}
            <br>
            
        </div>
    </div>
</div>
@endsection