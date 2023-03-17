@extends('layouts.app')

@section('template_title')
    {{ $factura->name ?? 'Show Factura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $factura->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Pedido Id:</strong>
                            {{ $factura->pedido_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $factura->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
