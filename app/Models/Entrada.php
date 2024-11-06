<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehiculo_id',
        'chofer_id',
        'fecha',
        'kilometraje',
        'observaciones',
    ];

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculos::class, 'vehiculo_id');
    }

    public function chofer()
    {
        return $this->belongsTo(Choferes::class, 'chofer_id');
    }
}
