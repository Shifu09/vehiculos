<?php

namespace App\Http\Livewire\Admin\Vehiculos;

use Livewire\Component;
use App\Models\Vehiculos;
use App\Models\Mantenimiento;

class MantenimientoList extends Component
{
    public $vehiculo;
    public $mantenimientos;

    public function mount($id)
    {
        $this->vehiculo = Vehiculos::findOrFail($id);
        $this->mantenimientos = Mantenimiento::where('id_vehiculo', $id)
            ->orderBy('fecha', 'desc')
            ->get();
    }

    public function render()
    {
        return view('livewire.admin.vehiculos.mantenimiento-list')
            ->layout('vendor.admin.layouts.app', ['title' => 'Historial de Mantenimientos']);
    }
}
