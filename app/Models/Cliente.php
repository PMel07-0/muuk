<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'idCliente';

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'correo',
        'estatus',
    ];

    public function membresias(): HasMany
    {
        return $this->hasMany(
            Membresia::class,
            'cliente_idCliente',
            'idCliente'
        );
    }

    public function membresiaVigente(): HasOne
    {
        return $this->hasOne(
            Membresia::class,
            'cliente_idCliente',
            'idCliente'
        )->whereDate('fechaFin', '>=', today());
    }
}