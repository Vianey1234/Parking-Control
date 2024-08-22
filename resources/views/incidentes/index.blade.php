@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{ __('Incidentes') }}</h2>
                    <a href="{{ route('incidentes.create') }}" class="btn btn-primary">{{ __('Crear Nuevo Incidente') }}</a>
                </div>

                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    @if ($incidentes->isEmpty())
                        <p>{{ __('No hay incidentes.') }}</p>
                    @else
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('Título') }}</th>
                                    <th>{{ __('Descripción') }}</th>
                                    <th>{{ __('Tipo') }}</th>
                                    <th>{{ __('Estado') }}</th>
                                    <th>{{ __('Acciones') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incidentes as $incidente)
                                    <tr>
                                        <td>{{ $incidente->titulo }}</td>
                                        <td>{{ $incidente->descripcion }}</td>
                                        <td>{{ $incidente->tipo }}</td>
                                        <td>{{ $incidente->estado }}</td>
                                        <td>
                                            <a href="{{ route('incidentes.show', $incidente->id) }}" class="btn btn-info btn-sm">Ver</a>
                                            <a href="{{ route('incidentes.edit', $incidente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                            <form action="{{ route('incidentes.destroy', $incidente->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este incidente?')">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $incidentes->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
