@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pantalla de Usuario</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <?php
                            echo Form::open(['route' => 'procesacuestionario']);
                            echo Form::token();
                        ?>
                        <div class="form-group">
                        <?php
                            echo Form::label('Q1', '¿Qué te gustaría que agregáramos al informe?');
                            echo "<br>";
                            echo Form::textarea('Q1','', ['class' => 'form-control']);
                        ?>
                        </div>
                        <?php
                            echo "<br>";
                            echo "<br>";

                            echo Form::label('Q2', '¿La información es correcta?');
                            echo "<br>";
                            echo Form::radio('Q2', 'Si');
                            echo "Si<br>";
                            echo Form::radio('Q2', 'No');
                            echo "No<br>";
                            echo Form::radio('Q2', 'Más o Menos');
                            echo "Más o Menos<br>";

                            echo "<br>";
                            echo "<br>";

                            echo Form::label('Q3', '¿Del 1 al 5, es rápido el sitio?');
                            echo "<br>";
                            echo Form::number('Q3', '1', ['max' => 5, 'min' => 1]);
                        ?>
                        <?php
                            echo "<br>";
                            echo "<br>";
                            echo Form::submit('Enviar');
                            echo Form::close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
