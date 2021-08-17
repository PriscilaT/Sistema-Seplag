@extends('layouts.app')
@section('content')

<div style="display:flex">
@include('layouts.sidebar')

<div class="container">
    
    <div class="row justify-content-left">
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
                        Informações do funcionario logado 
                    </div>


                    <div class="links">
                        
                        
                    </div>
                </div>
            
            </div> 
        </div>                       
    </div>
</div>
</div>
@endsection
