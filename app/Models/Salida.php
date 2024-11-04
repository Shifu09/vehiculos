<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    use HasFactory;

    protected $table = 'salidas';
    protected $fillable = [
        'id_vehiculo',
        'id_chofer',
        'destino',
        'kilometraje',
        'fecha',
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
