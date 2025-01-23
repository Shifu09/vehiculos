<?php

namespace App\Http\Livewire\Admin\Mantenimiento;

use App\Models\Mantenimiento;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $mantenimiento;

    public $id_vehiculo;
    public $tipo;
    public $fecha;
    public $observaciones;

    protected $rules = [
        'id_vehiculo' => 'required',
        'tipo' => 'required',
        'fecha' => 'required',
        'observaciones' => '',
    ];
    protected $messages = [
        'id_vehiculo.required' => 'El campo vehículo es obligatorio.',
        'tipo.required' => 'El campo tipo es obligatorio.',
        'fecha.required' => 'El campo fecha es obligatorio.',
        'observaciones' => 'El campo observaciones es opcional.',
    ];

    public function mount(Mantenimiento $Mantenimiento)
    {
        $this->mantenimiento = $Mantenimiento;
        $this->id_vehiculo = $this->mantenimiento->id_vehiculo;
        $this->tipo = $this->mantenimiento->tipo;
        $this->fecha = $this->mantenimiento->fecha;
        $this->observaciones = $this->mantenimiento->observaciones;
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if ($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Mantenimiento')])]);

        $this->mantenimiento->update([
            'id_vehiculo' => $this->id_vehiculo,
            'tipo' => $this->tipo,
            'fecha' => $this->fecha,
            'observaciones' => $this->observaciones,
            'user_id' => auth()->id(),
        ]);
        return redirect()->to('admin/mantenimiento');
    }

    public function render()
    {
        return view('livewire.admin.mantenimiento.update', [
            'mantenimiento' => $this->mantenimiento
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Mantenimiento')])]);
    }
}
