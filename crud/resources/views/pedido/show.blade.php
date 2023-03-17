@extends('layouts.app')

@section('template_title')
    {{ $pedido->name ?? 'Show Pedido' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $pedido->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $pedido->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $pedido->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
