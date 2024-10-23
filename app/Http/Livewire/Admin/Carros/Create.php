<?php

namespace App\Http\Livewire\Admin\Carros;

use App\Models\Carros;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $nombre;
    public $marca;
    public $color;
    
    protected $rules = [
        'nombre' => 'required',
        'marca' => 'required',
        'color' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Carros') ])]);
        
        Carros::create([
            'nombre' => $this->nombre,
            'marca' => $this->marca,
            'color' => $this->color,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.carros.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Carros') ])]);
    }
}
