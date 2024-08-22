@extends('layouts.app')

@section('template_title')
    Vehiculos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <!-- Título de la sección -->
                            <span id="card_title">
                                {{ __('Vehiculos') }}
                            </span>

                            <!-- Subtítulo o descripción -->
                            <span class="text-muted">
                                Registro y gestión de vehículos para la Universidad Tecnológica de Ciudad Juárez
                            </span>

                            <!-- Botón para crear un nuevo vehículo -->
                            <div class="float-right">
                                <a href="{{ route('vehiculos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registrar Nuevo Vehículo') }}
                                </a>
                              </div>
                        </div>
                    </div>

                    <!-- Mensaje de éxito -->
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <!-- Tabla que muestra los vehículos registrados -->
                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Placa</th>
                                        <th>Modelo</th>
                                        <th>Color</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehiculos as $vehiculo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $vehiculo->placa }}</td>
                                            <td>{{ $vehiculo->modelo }}</td>
                                            <td>{{ $vehiculo->color }}</td>
                                            <td>
                                                <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('vehiculos.show', $vehiculo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vehiculos.edit', $vehiculo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('¿Estás seguro de eliminar este vehículo?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Paginación -->
                {!! $vehiculos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
