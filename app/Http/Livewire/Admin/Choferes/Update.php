<?php

namespace App\Http\Livewire\Admin\Choferes;

use App\Models\Choferes;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $choferes;

    public $nombre;
    public $apellido;
    public $telefono;
    
    protected $rules = [
        'nombre' => 'required|string',
        'apellido' => 'required|string',
        'telefono' => 'required|numeric',        
    ];

    public function mount(Choferes $Choferes){
        $this->choferes = $Choferes;
        $this->nombre = $this->choferes->nombre;
        $this->apellido = $this->choferes->apellido;
        $this->telefono = $this->choferes->telefono;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Choferes') ]) ]);
        
        $this->choferes->update([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'telefono' => $this->telefono,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.choferes.update', [
            'choferes' => $this->choferes
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Choferes') ])]);
    }
}
