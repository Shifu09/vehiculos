<?php

namespace App\Http\Livewire\Admin\Vehiculos;

use App\Models\Vehiculos;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $vehiculos;

    public $codigo_auto;
    public $placa;
    public $marca;
    public $modelo;
    public $color;
    public $age;
    public $serial;

    protected $rules = [
        // 'codigo_auto' => 'required|unique:carros',
        'placa' => 'required|string',
        'marca' => 'required|string',
        'modelo' => 'required|string',
        'color' => 'required|string',
        'age' => 'required|numeric',
        'serial' => 'required|string',
    ];

    public function mount(Vehiculos $Vehiculos)
    {
        $this->vehiculos = $Vehiculos;
        $this->codigo_auto = $this->vehiculos->codigo_auto;
        $this->placa = $this->vehiculos->placa;
        $this->marca = $this->vehiculos->marca;
        $this->modelo = $this->vehiculos->modelo;
        $this->color = $this->vehiculos->color;
        $this->age = $this->vehiculos->age;
        $this->serial = $this->vehiculos->serial;
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if ($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Vehiculos')])]);

        $this->vehiculos->update([
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
    }

    public function render()
    {
        return view('livewire.admin.vehiculos.update', [
            'vehiculos' => $this->vehiculos
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Vehiculos')])]);
    }
}
