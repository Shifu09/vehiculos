<?php

namespace App\CRUD;

use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;
use App\Models\Carros;
use App\Models\Vehiculos;

class VehiculosComponent implements CRUDComponent
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
        return Vehiculos::class;
    }

    // which kind of data should be showed in list page
    public function fields()
    {
        return ['codigo_auto', 'placa', 'marca', 'color', 'age', 'serial'];
    }

    // Searchable fields, if you dont want search feature, remove it
    public function searchable()
    {
        return ['codigo_auto', 'placa', 'marca', 'color', 'age', 'serial'];
    }

    // Write every fields in your db which you want to have a input
    // Available types : "ckeditor", "checkbox", "string", "select", "file", "stringarea"
    // "password", "number", "email", "select", "date", "datetime", "time"
    public function inputs()
    {
        return [
            'codigo_auto' => 'text',
            'placa' => 'text',
            'marca' => 'text',
            'color' => 'text',
            'age' => 'text',
            'serial' => 'text',
        ];
    }

    // Validation in update and create actions
    // It uses Laravel validation system
    public function validationRules()
    {
        return [
            'codigo_auto' => 'required|unique:carros',
            'placa' => 'required|string',
            'marca' => 'required|string',
            'color' => 'required|string',
            'age' => 'required|numeric',
            'serial' => 'required|string',
        ];
    }

    // Where files will store for inputs
    public function storePaths()
    {
        return [];
    }
}
