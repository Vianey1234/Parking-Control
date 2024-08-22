@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear Incidente') }}</div>

                <div class="card-body">
                    <form action="{{ route('incidentes.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="titulo">{{ __('Título') }}</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">{{ __('Descripción') }}</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tipo">{{ __('Tipo') }}</label>
                            <input type="text" class="form-control" id="tipo" name="tipo" required>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
