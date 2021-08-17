@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                <div class="card-header">{{ __('Página do ADMIN') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    <div class="content">
                    <div class="title m-b-md">
                        Sistema SEPLAG 
                    </div>


                    <div class="links">
                        <a href="/funcionario">Funcionários </a><br>
                        <a href="/curso">Cursos </a><br>
                        <a href="/instituicao">Instituições </a><br>
                        <a href="/cargo">Cargos </a><br>
                        <a href="/tecnologia">Tecnologias </a><br>
                        <a href="/projeto">Projetos </a><br>
                        
                    </div>
                </div>
            
            </div> 
        </div>                       
    </div>
</div>
@endsection
