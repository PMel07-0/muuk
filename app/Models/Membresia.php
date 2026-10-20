<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

class Membresia extends Model
{
    protected $table = 'membresias';
    protected $primaryKey = 'idMembresia';

    protected $fillable = [
        'cliente_idCliente',
        'tipoMembresia_idTipoMembresia',
        'fechaInicio',
        'fechaFin',
        'pago',
        'vigencia',
    ];

    protected $casts = [
        'fechaInicio' => 'date',
        'fechaFin' => 'date',
        'pago' => 'decimal:2',
    ];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class, 'cliente_idCliente', 'idCliente');
    }

    public function tipoMembresia(): BelongsTo
    {
        return $this->belongsTo(TipoMembresia::class, 'tipoMembresia_idTipoMembresia', 'idTipoMembresia');
    }

    public function calcularFechaFin($fechaInicio, $duracionDias)
    {
        return $fechaInicio->copy()->addDays($duracionDias);
    }

    public function getVigenciaCalculadaAttribute()
    {
        return now()->lt($this->fechaFin->copy()->addDay()) ? 'Vigente' : 'Vencida';
    }
}

