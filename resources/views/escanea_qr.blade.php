@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Escanea tu QR</h1>

    @if(session('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif

    <form action="{{ route('codigo_qr.scan') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="placa" class="form-label">Escanea el QR aquí</label>
            <input type="text" name="placa" id="placa" class="form-control" autofocus required>
        </div>
        <button type="submit" class="btn btn-primary">Verificar Placa</button>
    </form>
</div>
@endsection
