<?php

namespace App\Http\Livewire\Admin\Mantenimiento;

use App\Models\Mantenimiento;
use Livewire\Component;

class Single extends Component
{

    public $mantenimiento;

    public function mount(Mantenimiento $Mantenimiento){
        $this->mantenimiento = $Mantenimiento;
    }

    public function delete()
    {
        $this->mantenimiento->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Mantenimiento') ]) ]);
        $this->emit('mantenimientoDeleted');
    }

    public function render()
    {
        return view('livewire.admin.mantenimiento.single')
            ->layout('admin::layouts.app');
    }
}
