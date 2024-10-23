<?php

namespace App\Http\Livewire\Admin\Carros;

use App\Models\Carros;
use Livewire\Component;

class Single extends Component
{

    public $carros;

    public function mount(Carros $Carros){
        $this->carros = $Carros;
    }

    public function delete()
    {
        $this->carros->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Carros') ]) ]);
        $this->emit('carrosDeleted');
    }

    public function render()
    {
        return view('livewire.admin.carros.single')
            ->layout('admin::layouts.app');
    }
}
