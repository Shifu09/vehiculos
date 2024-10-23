<?php

namespace App\Http\Livewire\Admin\Carros;

use App\Models\Carros;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $carros;

    public $nombre;
    public $marca;
    public $color;

    protected $rules = [
        'nombre' => 'required',
        'marca' => 'required',
        'color' => 'required',
    ];

    public function mount(Carros $carros)
    {
        $this->carros = $carros;
        $this->nombre = $this->carros->nombre;
        $this->marca = $this->carros->marca;
        $this->color = $this->carros->color;
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if ($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Carros')])]);

        $this->carros->update([
            'nombre' => $this->nombre,
            'marca' => $this->marca,
            'color' => $this->color,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.carros.update', [
            'carros' => $this->carros
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Carros')])]);
    }
}
