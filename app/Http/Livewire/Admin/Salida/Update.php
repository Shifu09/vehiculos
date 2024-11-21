<?php

namespace App\Http\Livewire\Admin\Salida;

use App\Models\Salida;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $salida;

    public $id_vehiculo;
    public $id_chofer;
    public $destino;
    public $kilometraje;
    public $fecha;
    public $observaciones;

    protected $rules = [
        'id_vehiculo' => 'required',
        'id_chofer' => 'required',
        'destino' => 'required',
        'kilometraje' => 'required',
        'fecha' => 'required',
    ];

    public function mount(Salida $Salida)
    {
        $this->salida = $Salida;
        $this->id_vehiculo = $this->salida->id_vehiculo;
        $this->id_chofer = $this->salida->id_chofer;
        $this->destino = $this->salida->destino;
        $this->kilometraje = $this->salida->kilometraje;
        $this->fecha = $this->salida->fecha;
        $this->observaciones = $this->salida->observaciones;
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if ($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Salida')])]);

        $this->salida->update([
            'id_vehiculo' => $this->id_vehiculo,
            'id_chofer' => $this->id_chofer,
            'destino' => $this->destino,
            'kilometraje' => $this->kilometraje,
            'fecha' => $this->fecha,
            'observaciones' => $this->observaciones,
            'user_id' => auth()->id(),
        ]);
        return redirect()->to('admin/salida');
    }

    public function render()
    {
        return view('livewire.admin.salida.update', [
            'salida' => $this->salida
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Salida')])]);
    }
}
