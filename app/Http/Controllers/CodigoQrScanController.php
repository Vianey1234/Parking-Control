<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class CodigoQrScanController extends Controller
{
    public function showForm()
    {
        return view('escanea_qr');
    }

    public function scan(Request $request)
    {
        $request->validate([
            'placa' => 'required|string|max:255',
        ]);

        $placa = $request->placa;

        // Buscar en la base de datos
        $vehiculo = Vehiculo::where('placa', $placa)->first();

        if ($vehiculo) {
            return redirect()->back()->with('message', 'Placa registrada: ' . $placa);
        } else {
            return redirect()->back()->with('message', 'Placa no registrada');
        }
    }
}

