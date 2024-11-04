<?php

namespace App\Http\Livewire\Admin\Choferes;

use App\Models\Choferes;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $nombre;
    public $apellido;
    public $telefono;
    
    protected $rules = [
        'nombre' => 'required|string',
        'apellido' => 'required|string',
        'telefono' => 'required|numeric',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Choferes') ])]);
        
        Choferes::create([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'telefono' => $this->telefono,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.choferes.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Choferes') ])]);
    }
}
