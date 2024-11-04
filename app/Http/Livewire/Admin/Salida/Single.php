<?php

namespace App\Http\Livewire\Admin\Salida;

use App\Models\Salida;
use Livewire\Component;

class Single extends Component
{

    public $salida;

    public function mount(Salida $Salida){
        $this->salida = $Salida;
    }

    public function delete()
    {
        $this->salida->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Salida') ]) ]);
        $this->emit('salidaDeleted');
    }

    public function render()
    {
        return view('livewire.admin.salida.single')
            ->layout('admin::layouts.app');
    }
}
