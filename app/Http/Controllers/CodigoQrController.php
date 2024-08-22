<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use App\Models\CodigoQr;

class CodigoQrController extends Controller
{
    public function create()
    {
        return view('crea_qr');
    }

    public function store(Request $request)
{
    // Validación de la placa
    $request->validate([
        'placa' => 'required|string|max:255',
    ]);

    // Crear una nueva instancia de CodigoQr
    $codigoQr = new CodigoQr();
    $codigoQr->placa = $request->placa;

    // Generar el QR y guardar la ruta
    $qrPath = 'qrs/' . uniqid() . '.svg';
    QrCode::format('svg')->generate($codigoQr->placa, public_path($qrPath));

    // Guardar la ruta del QR en la base de datos
    $codigoQr->qr_code_path = $qrPath;
    $codigoQr->save();

    // Redirigir a la misma vista con la ruta del QR generado
    return view('crea_qr', ['qrPath' => $qrPath])->with('success', '¡QR generado exitosamente!');
}

}

