<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        return $this->hasMany(Membresia::class);
    }

    public function membresiaVigente(): HasOne
    {
        return $this->hasOne(Membresia::class)
                    ->where('vigencia', 'Vigente');
    }

}
