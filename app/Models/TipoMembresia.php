<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoMembresia extends Model
{
    protected $table = 'tipo_membresia';
    protected $primaryKey = 'idTipoMembresia';

    protected $fillable = [
        'nombre',
        'descripcion',
        'costo',
        'duracion_dias',
        'estatus',
    ];

    public function membresias(): HasMany
    {
        return $this->hasMany(Membresia::class);
    }
}
