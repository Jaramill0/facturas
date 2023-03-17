@extends('layouts.app')

@section('template_title')
    {{ $pedidosItem->name ?? 'Show Pedidos Item' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pedidos Item</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos-items.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Pedido Id:</strong>
                            {{ $pedidosItem->pedido_id }}
                        </div>
                        <div class="form-group">
                            <strong>Articulo Id:</strong>
                            {{ $pedidosItem->articulo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $pedidosItem->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
