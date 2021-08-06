@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Vendo informações do curso: {{ $curso->nome }}</h1>

            <a href="/curso" class="btn btn-danger btn-sm">Voltar</a>

            <br>
            Nome: {{ $curso->nome }}
            <br>
            
        </div>
    </div>
</div>
@endsection