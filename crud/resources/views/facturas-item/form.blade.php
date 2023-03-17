<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('factura_id') }}
            {{ Form::text('factura_id', $facturasItem->factura_id, ['class' => 'form-control' . ($errors->has('factura_id') ? ' is-invalid' : ''), 'placeholder' => 'Factura Id']) }}
            {!! $errors->first('factura_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('articulo_id') }}
            {{ Form::text('articulo_id', $facturasItem->articulo_id, ['class' => 'form-control' . ($errors->has('articulo_id') ? ' is-invalid' : ''), 'placeholder' => 'Articulo Id']) }}
            {!! $errors->first('articulo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::number('cantidad', $facturasItem->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>