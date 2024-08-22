@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Sección de Introducción -->
    <div class="text-center my-5">
        <h1 class="display-4">Bienvenido a Parking Control</h1>
        <p class="lead">La solución ideal para gestionar los accesos vehiculares en la UTCJ</p>
    </div>

    <!-- Sección de Servicios -->
    <div class="d-flex justify-content-around mb-5">
        <div class="text-center">
            <h3>Gestión de Vehículos</h3>
            <p class="card-text">Administra los vehículos registrados de manera eficiente.</p>
            <a href="{{ route('vehiculos.index') }}" class="btn btn-outline-primary">Ver Vehículos</a>
        </div>
        <div class="text-center">
            <h3>Gestión de Incidentes</h3>
            <p class="card-text">Registra y maneja incidentes de manera efectiva.</p>
            <a href="{{ route('incidentes.index') }}" class="btn btn-outline-secondary">Ver Incidentes</a>
        </div>
        <div class="text-center">
            <h3>Genera y Escanea QR</h3>
            <p class="card-text">Crea y escanea códigos QR para un control más ágil.</p>
            <a href="{{ route('codigo_qr.create') }}" class="btn btn-outline-success">Crear QR</a>
            <a href="{{ route('codigo_qr.scan_form') }}" class="btn btn-outline-info mt-2">Escanear QR</a>
        </div>
    </div>

    <!-- Sección de Información -->
    <div class="text-center my-5">
        <a href="{{ route('vision-mision') }}" class="btn btn-dark btn-lg">Misión y Visión</a>
    </div>
</div>

<footer class="footer bg-light text-dark py-4">
    <div class="container text-center">
        <p class="mb-0">
            &copy; 2024 Universidad Tecnológica de Ciudad Juárez | Diseño web por Vianey Moran
        </p>
    </div>
</footer>
@endsection

@section('styles')
<style>
    .footer {
        background-color: #f8f9fa;
    }
</style>
@endsection

