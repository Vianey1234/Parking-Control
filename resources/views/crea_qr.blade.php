@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Crea tu QR</h1>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="center-content">
        <form action="{{ route('codigo_qr.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="placa" class="form-label">Placa del Vehículo</label>
                <input type="text" name="placa" id="placa" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Generar QR</button>
        </form>
    </div>

    @if(isset($qrPath))
        <div class="text-center mt-4">
            <h3>Tu QR generado:</h3>
            <img src="{{ asset($qrPath) }}" alt="Código QR">
        </div>
    @endif
</div>

@section('styles')
<style>
    .center-content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>
@endsection
@endsection
