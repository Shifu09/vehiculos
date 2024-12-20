<?php

namespace App\Http\Livewire\Admin\Mantenimiento;

use App\Models\Mantenimiento;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $id_vehiculo;
    public $tipo;
    public $fecha;
    public $observaciones;

    protected $rules = [
        'id_vehiculo' => 'required',
        'tipo' => 'required',
        'fecha' => 'required',
    ];
    protected $messages = [
        'id_vehiculo.required' => 'El campo vehiculo es obligatorio.',
        'tipo.required' => 'El campo tipo es obligatorio.',
        'fecha.required' => 'El campo fecha es obligatorio.',
    ];
    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if ($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Mantenimiento')])]);

        Mantenimiento::create([
            'id_vehiculo' => $this->id_vehiculo,
            'tipo' => $this->tipo,
            'fecha' => $this->fecha,
            'observaciones' => $this->observaciones,
            'user_id' => auth()->id(),
        ]);
        return redirect()->to('admin/mantenimiento');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.mantenimiento.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Mantenimiento')])]);
    }
}
