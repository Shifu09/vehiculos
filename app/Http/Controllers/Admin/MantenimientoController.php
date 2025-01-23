<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mantenimiento;
use Illuminate\Http\Request;
use PDF;

class MantenimientoController extends Controller
{
    public function print(Mantenimiento $mantenimiento)
    {
        $mantenimiento->load('vehiculo');
        
        // Configurar DomPDF
        $pdf = PDF::loadView('admin.mantenimiento.print', compact('mantenimiento'));
        $pdf->getDomPDF()->set_option('isRemoteEnabled', true);
        $pdf->getDomPDF()->set_option('isHtml5ParserEnabled', true);
        
        return $pdf->stream('mantenimiento-' . $mantenimiento->id . '.pdf');
    }
}
