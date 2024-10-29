<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    use HasFactory;
    protected $table = 'carros';
    protected $fillable = [
        'codigo_auto',
        'placa',
        'marca',
        'color',
        'age',
        'serial',
    ];
    public function mantenimiento()
    {
        return $this->belongsTo(Mantenimiento::class, 'codigo_auto');
    }
}
