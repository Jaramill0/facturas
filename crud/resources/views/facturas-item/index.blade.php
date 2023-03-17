@extends('layouts.app')

@section('template_title')
    Facturas Item
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Facturas Item') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('facturas-items.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Confirmar Factura') }}
                                </a>
                                <a href="{{ route('home') }}" class="btn btn-info btn-sm float-right"  data-placement="left">
                                    {{ __('Regresar a Inicio') }}
                                  </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Factura Id</th>
										<th>Articulo Id</th>
										<th>Cantidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($facturasItems as $facturasItem)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $facturasItem->factura_id }}</td>
											<td>{{ $facturasItem->articulo_id }}</td>
											<td>{{ $facturasItem->cantidad }}</td>

                                            <td>
                                                <form action="{{ route('facturas-items.destroy',$facturasItem->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('facturas-items.show',$facturasItem->id) }}"><i class="fa fa-fw fa-eye"></i>Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('facturas-items.edit',$facturasItem->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $facturasItems->links() !!}
            </div>
        </div>
    </div>
@endsection
