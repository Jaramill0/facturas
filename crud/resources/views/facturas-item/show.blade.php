@extends('layouts.app')

@section('template_title')
    {{ $facturasItem->name ?? 'Show Facturas Item' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Facturas Item</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas-items.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Factura Id:</strong>
                            {{ $facturasItem->factura_id }}
                        </div>
                        <div class="form-group">
                            <strong>Articulo Id:</strong>
                            {{ $facturasItem->articulo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $facturasItem->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
