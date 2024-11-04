<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choferes extends Model
{
    use HasFactory;
    protected $table = 'choferes';
    protected $fillable = ['nombre', 'apellido', 'telefono',];

    public function salidas()
    {
        return $this->hasMany(Salida::class);
    }
}
