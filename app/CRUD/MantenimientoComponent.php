<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\Mantenimiento;
use App\Models\Vehiculos;

class MantenimientoComponent implements CRUDComponent
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
        return Mantenimiento::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['id_vehiculo', 'tipo', 'fecha', 'observaciones'];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['id_vehiculo', 'tipo', 'fecha', 'observaciones'];
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
        $tiposMantenimiento = [
            'Cambio de aceite' => 'Cambio de aceite',
            'Cambio de batería' => 'Cambio de batería',
            'Cambio de cauchos' => 'Cambio de cauchos',
            'Cambio de filtro' => 'Cambio de filtro',
            'Cambio de líquido refrigerante' => 'Cambio de líquido refrigerante',
            'Cambio de neumáticos' => 'Cambio de neumáticos',
            'Cambio de luces' => 'Cambio de luces',
            'Inspección de correas' => 'Inspección de correas',
            'Inspección del estado de mangueras' => 'Inspección del estado de mangueras',
            'Revisión/cambio de bujías' => 'Revisión/cambio de bujías',
            'Revisión/cambio de pastillas de freno' => 'Revisión/cambio de pastillas de freno',
            'Revisión/cambio de los discos de freno' => 'Revisión/cambio de los discos de freno',
            'Reparación de correas' => 'Reparación de correas',
            'Revisión de frenos' => 'Revisión de frenos',
            'Revisión de alternador' => 'Revisión de alternador',
            'Revisión de la caja de cambios' => 'Revisión de la caja de cambios',
            'Mantenimiento general' => 'Mantenimiento general',
        ];
        return [
            'id_vehiculo' => ['select' => $vehiculosArray],
            'tipo' => [
                'type' => 'multiselect',
                'options' => $tiposMantenimiento,
            ],
            'fecha' => 'date',
            'observaciones' => 'text',
        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'id_vehiculo' => 'required',
            'tipo' => 'required',
            'fecha' => 'required',
            'observaciones' => '',
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}
