<?php

namespace App\Http\Livewire\Admin\Entrada;

use App\Models\Entrada;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $entrada;

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

    public function mount(Entrada $Entrada)
    {
        $this->entrada = $Entrada;
        $this->id_vehiculo = $this->entrada->id_vehiculo;
        $this->id_chofer = $this->entrada->id_chofer;
        $this->kilometraje = $this->entrada->kilometraje;
        $this->fecha = $this->entrada->fecha;
        $this->observaciones = $this->entrada->observaciones;
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if ($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Entrada')])]);

        $this->entrada->update([
            'id_vehiculo' => $this->id_vehiculo,
            'id_chofer' => $this->id_chofer,
            'kilometraje' => $this->kilometraje,
            'fecha' => $this->fecha,
            'observaciones' => $this->observaciones,
            'user_id' => auth()->id(),
        ]);
        return redirect()->to('admin/entradas');
    }

    public function render()
    {
        return view('livewire.admin.entrada.update', [
            'entrada' => $this->entrada
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Entrada')])]);
    }
}
