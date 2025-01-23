<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Salida;
use Illuminate\Http\Request;
use PDF;

class SalidaController extends Controller
{
    public function print(Salida $salida)
    {
        $salida->load(['vehiculo', 'chofer']);
        $pdf = PDF::loadView('admin.salida.print', compact('salida'));
        return $pdf->stream('salida-vehiculo-' . $salida->id . '.pdf');
    }
}
