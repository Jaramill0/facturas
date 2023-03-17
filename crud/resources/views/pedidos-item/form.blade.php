<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('pedido_id') }}
            {{ Form::text('pedido_id', $pedidosItem->pedido_id, ['class' => 'form-control' . ($errors->has('pedido_id') ? ' is-invalid' : ''), 'placeholder' => 'Pedido Id']) }}
            {!! $errors->first('pedido_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('articulo_id') }}
            {{ Form::text('articulo_id', $pedidosItem->articulo_id, ['class' => 'form-control' . ($errors->has('articulo_id') ? ' is-invalid' : ''), 'placeholder' => 'Articulo Id']) }}
            {!! $errors->first('articulo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $pedidosItem->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>