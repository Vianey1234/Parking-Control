<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncidenteController;
use App\Http\Controllers\CodigoQrController;
use App\Http\Controllers\CodigoQrScanController;


// Ruta principal de la aplicación
Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación
Auth::routes();

// Ruta del panel principal (Home)
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Ruta para el CRUD de Vehículos
Route::resource('vehiculos', VehiculoController::class);

// Ruta para el CRUD de Incidentes
Route::resource('incidentes', IncidenteController::class);

// Ruta para generar el código QR de un vehículo específico
Route::get('vehiculos/qr/{id}', [VehiculoController::class, 'generateQr'])->name('vehiculos.qr');

// Ruta para mostrar el formulario de creación del QR (Crea tu QR)
Route::get('/crea-qr', [CodigoQrController::class, 'create'])->name('codigo_qr.create');

// Ruta para manejar el envío del formulario y generar el QR
Route::post('/crea-qr', [CodigoQrController::class, 'store'])->name('codigo_qr.store');

// Ruta para mostrar el formulario de escaneo de QR
Route::get('/escanea-qr', [CodigoQrScanController::class, 'showForm'])->name('codigo_qr.scan_form');

// Ruta para manejar el envío del formulario y escanear el QR
Route::post('/escanea-qr', [CodigoQrScanController::class, 'scan'])->name('codigo_qr.scan');

Route::get('/vision-mision', function () { return view('vision-mision'); })->name('vision-mision');
