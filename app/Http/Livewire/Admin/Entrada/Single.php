<?php

namespace App\Http\Livewire\Admin\Entrada;

use App\Models\Entrada;
use Livewire\Component;

class Single extends Component
{

    public $entrada;

    public function mount(Entrada $Entrada){
        $this->entrada = $Entrada;
    }

    public function delete()
    {
        $this->entrada->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Entrada') ]) ]);
        $this->emit('entradaDeleted');
    }

    public function render()
    {
        return view('livewire.admin.entrada.single')
            ->layout('admin::layouts.app');
    }
}
