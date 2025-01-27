<?php

namespace App\Http\Livewire\Admin\Vehiculos;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Vehiculos;
use App\Models\Mantenimiento;

class MantenimientoList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $vehiculo;

    public function mount($id)
    {
        $this->vehiculo = Vehiculos::findOrFail($id);
    }

    public function render()
    {
        $mantenimientos = Mantenimiento::where('id_vehiculo', $this->vehiculo->id)
            ->orderBy('fecha', 'desc')
            ->simplePaginate(5);

        return view('livewire.admin.vehiculos.mantenimiento-list', [
            'mantenimientos' => $mantenimientos
        ])->layout('vendor.admin.layouts.app', ['title' => 'Historial de Mantenimientos']);
    }
}
