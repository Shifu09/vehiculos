<?php

namespace App\Http\Controllers;

use App\Models\Salida;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReporteController extends Controller
{

    public function generateSalidaReport($id)
    {
        // $salidas = Salida::with('vehiculo', 'chofer' )->get();
        $salidas = Salida::findOrFail($id);
        $pdf = Pdf::loadView('livewire.admin.salida.pdf', compact('salidas'));
        return $pdf->stream('salida_report.pdf');
    }
}
