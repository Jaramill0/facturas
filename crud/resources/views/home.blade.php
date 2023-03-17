@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Bienvenido Usuario!')  }}
                </div>
            </div>
            <br>
            <div  class="btn-group float-left" role="group" aria-label="Basic outlined example">
                <a class="btn btn-danger" href="{{ route('pedidos.index') }}"> Pedidos</a>
                <a class="btn btn-success" href="{{ route('articulos.index') }}"> Acticulos</a>
                <a class="btn btn-primary" href="{{ route('facturas.index') }}"> Facturas</a>
                <a class="btn btn-success" href="{{ route('clientes.index') }}"> Clientes</a>
                <a class="btn btn-warning" href="{{ route('facturas-items.index') }}"> Facturas-Items</a>
                <a class="btn btn-secondary" href="{{ route('pedidos-items.index') }}">Pedidos-Items</a>
            </div>
        </div>
    </div>
</div>
@endsection
