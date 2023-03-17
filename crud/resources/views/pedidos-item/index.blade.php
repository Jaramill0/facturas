@extends('layouts.app')

@section('template_title')
    Pedidos Item
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pedidos Item') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pedidos-items.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Confirmar Pedido') }}
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
                                        
										<th>Pedido Id</th>
										<th>Articulo Id</th>
										<th>Cantidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidosItems as $pedidosItem)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pedidosItem->pedido_id }}</td>
											<td>{{ $pedidosItem->articulo_id }}</td>
											<td>{{ $pedidosItem->cantidad }}</td>

                                            <td>
                                                <form action="{{ route('pedidos-items.destroy',$pedidosItem->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pedidos-items.show',$pedidosItem->id) }}"><i class="fa fa-fw fa-eye"></i>Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pedidos-items.edit',$pedidosItem->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
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
                {!! $pedidosItems->links() !!}
            </div>
        </div>
    </div>
@endsection
