<?php

namespace App\CRUD;

use App\Models\Choferes;
use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\Salida;
use App\Models\Vehiculos;

class SalidaComponent implements CRUDComponent
{
    // Manage actions in crud
    public $create = true;
    public $delete = true;
    public $update = true;

    // If you will set it true it will automatically
    // add `user_id` to create and update action
    public $with_user_id = true;

    public function getModel()
    {
        return Salida::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['id_vehiculo', 'id_chofer', 'destino', 'kilometraje', 'fecha', 'observaciones'];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['destino', 'kilometraje', 'fecha', 'id_vehiculo', 'id_chofer'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "text", "select", "file", "textarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        $vehiculosArray = [];
        $vehiculos = Vehiculos::all();
        foreach ($vehiculos as $vehiculo) {
            $vehiculosArray[$vehiculo->id] = $vehiculo->marca;
        }
        $choferesArray = [];
        $choferes = Choferes::all();
        foreach ($choferes as $chofer) {
            $choferesArray[$chofer->id] = $chofer->nombre;
        }
        return [
            'id_vehiculo' => ['select' => $vehiculosArray],
            'id_chofer' => ['select' => $choferesArray],
            'destino' => 'text',
            'kilometraje' => 'text',
            'fecha' => 'datetime',
            'observaciones' => 'text',
        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}