<?php

namespace App\Http\Livewire\Admin\Choferes;

use App\Models\Choferes;
use Livewire\Component;

class Single extends Component
{

    public $choferes;

    public function mount(Choferes $Choferes){
        $this->choferes = $Choferes;
    }

    public function delete()
    {
        $this->choferes->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Choferes') ]) ]);
        $this->emit('choferesDeleted');
    }

    public function render()
    {
        return view('livewire.admin.choferes.single')
            ->layout('admin::layouts.app');
    }
}
