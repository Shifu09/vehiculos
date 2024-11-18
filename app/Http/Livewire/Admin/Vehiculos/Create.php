<?php

namespace App\Http\Livewire\Admin\Vehiculos;

use App\Models\Vehiculos;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $codigo_auto;
    public $placa;
    public $marca;
    public $modelo;
    public $color;
    public $age;
    public $serial;

    protected $rules = [
        'codigo_auto' => 'required|unique:carros',
        'placa' => 'required|string',
        'marca' => 'required|string',
        'modelo' => 'required|string',
        'color' => 'required|string',
        'age' => 'required|numeric',
        'serial' => 'required|string',
        'estado' => 'required|string',
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if ($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Vehiculos')])]);

        Vehiculos::create([
            'codigo_auto' => $this->codigo_auto,
            'placa' => $this->placa,
            'marca' => $this->marca,
            'modelo' => $this->modelo,
            'color' => $this->color,
            'age' => $this->age,
            'serial' => $this->serial,
            'user_id' => auth()->id(),
        ]);
        return redirect()->to('admin/vehiculos');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.vehiculos.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Vehiculos')])]);
    }
}
