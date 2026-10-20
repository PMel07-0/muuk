<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetallePrestamo extends Model
{
    protected $table = 'detalle_prestamo';
    protected $primaryKey = 'idDetallePrestamo';

    protected $fillable = [
        'prestamo_idPrestamo',
        'material_idMaterial',
        'cantidad',
        'estado',
        'estado_fisico_devuelto',
        'fechaDevolucion',
    ];

    public function prestamo(): BelongsTo
    {
        return $this->belongsTo(Prestamo::class);
    }

    public function material(): BelongsTo
    {
        return $this->belongsTo(MaterialDeportivo::class);
    }
}
