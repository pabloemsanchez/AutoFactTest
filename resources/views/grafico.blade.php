@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Grafico de Respuestas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <div id="grafico_div"></div>
                    
                    @piechart('Porcentaje de Respuestas', 'grafico_div')
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection