<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
        return $this->hasMany(
            DetallePrestamo::class,
            'material_idMaterial',
            'idMaterial'
        );
    }

    protected function cantidadDisponible(): Attribute
    {
        return Attribute::make(
            get: function ($value, array $attributes) {
                $inventario = (int) ($attributes['cantidad_inventario'] ?? 0);

                $prestadoActivo = (int) $this->detallesPrestamo()
                    ->where('estado', '!=', 'Devuelto')
                    ->whereIn('estado', ['Prestado', 'prestado', 'Activo', 'activo'])
                    ->sum('cantidad');

                return max(0, $inventario - $prestadoActivo);
            }
        );
    }
}