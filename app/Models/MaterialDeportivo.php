<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MaterialDeportivo extends Model
{
    protected $table = 'materiales_deportivos';
    protected $primaryKey = 'idMaterial';

    protected $fillable = [
        'nombre',
        'categoria',
        'estado_fisico',
        'cantidad_inventario',
        'cantidad_disponible',
        'estatus',
    ];

    public function detallesPrestamo(): HasMany
    {
        return $this->hasMany(DetallePrestamo::class);
    }
}

