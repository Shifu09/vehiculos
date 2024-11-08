<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_vehiculo',
        'id_chofer',
        'fecha',
        'kilometraje',
        'observaciones',
    ];

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculos::class, 'id_vehiculo');
    }

    public function chofer()
    {
        return $this->belongsTo(Choferes::class, 'id_chofer');
    }
}
