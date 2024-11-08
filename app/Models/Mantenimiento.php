<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;

    protected $table = 'mantenimientos';
    protected $fillable = [
        'id_vehiculo',
        'tipo',
        'fecha',
        'observaciones',
    ];
    protected $casts = [
        'tipo' => 'array',
    ];
    // TODO: Crear relacion con choferes
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculos::class, 'id_vehiculo');
    }
}
