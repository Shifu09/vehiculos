<?php

namespace App\Http\Livewire\Admin\Vehiculos;

use App\Models\Vehiculos;
use Livewire\Component;

class Single extends Component
{

    public $vehiculos;

    public function mount(Vehiculos $Vehiculos){
        $this->vehiculos = $Vehiculos;
    }

    public function delete()
    {
        $this->vehiculos->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Vehiculos') ]) ]);
        $this->emit('vehiculosDeleted');
    }

    public function render()
    {
        return view('livewire.admin.vehiculos.single')
            ->layout('admin::layouts.app');
    }
}
