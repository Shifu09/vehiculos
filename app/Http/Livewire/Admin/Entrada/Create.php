<?php

namespace App\Http\Livewire\Admin\Entrada;

use App\Models\Entrada;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $id_vehiculo;
    public $id_chofer;
    public $kilometraje;
    public $fecha;
    public $observaciones;
    
    protected $rules = [
        'id_vehiculo' => 'required',
        'id_chofer' => 'required',
        'kilometraje' => 'required',
        'fecha' => 'required',
        'observaciones' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Entrada') ])]);
        
        Entrada::create([
            'id_vehiculo' => $this->id_vehiculo,
            'id_chofer' => $this->id_chofer,
            'kilometraje' => $this->kilometraje,
            'fecha' => $this->fecha,
            'observaciones' => $this->observaciones,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.entrada.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Entrada') ])]);
    }
}
