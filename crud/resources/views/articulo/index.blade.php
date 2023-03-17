@extends('layouts.app')

@section('template_title')
    Articulo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Articulo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('articulos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Articulo') }}
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
                                        
										<th>Codigo</th>
										<th>Nombre</th>
										<th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articulos as $articulo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $articulo->codigo }}</td>
											<td>{{ $articulo->nombre }}</td>
											<td>{{ $articulo->precio }}</td>

                                            <td>
                                                <form action="{{ route('articulos.destroy',$articulo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('articulos.show',$articulo->id) }}"><i class="fa fa-fw fa-eye"></i>Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('articulos.edit',$articulo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $articulos->links() !!}
            </div>
        </div>
    </div>
@endsection
