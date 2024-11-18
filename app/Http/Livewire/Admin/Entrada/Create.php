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
        'kilometraje' => 'required|numeric',
        'fecha' => 'required',
    ];
    protected $messages = [

        'id_vehiculo.required' => 'El campo Vehiculo es obligatorio',
        'id_chofer.required' => 'El campo Chofer es obligatorio',
        'kilometraje.required' => 'El campo Kilometraje es obligatorio',
        'kilometraje.numeric' => 'El campo Kilometraje debe ser numerico',
        'fecha.required' => 'El campo Fecha es obligatorio',
    ];
    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if ($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Entrada')])]);

        Entrada::create([
            'id_vehiculo' => $this->id_vehiculo,
            'id_chofer' => $this->id_chofer,
            'kilometraje' => $this->kilometraje,
            'fecha' => $this->fecha,
            'observaciones' => $this->observaciones,
            'user_id' => auth()->id(),
        ]);

        return redirect()->to('admin/entradas');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.entrada.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Entrada')])]);
    }
}
