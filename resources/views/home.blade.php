@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3 class="text-center">Consulta de movilidad de autos y motos en Quito</h3>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4 class="text-center">Ingrese los datos indicados</h3>
                    @include('partials.form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
