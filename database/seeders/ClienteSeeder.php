<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nombre' => 'Miriam Doyel',
            'apellido_paterno' => 'Lozano',
            'apellido_materno' => 'Matus',
            'fecha_nacimiento' => '2006-12-12',
            'correo' => 'miriamlozano1206@gmail.com',
            'estatus' => 'Activa'
        ]);

        Cliente::create([
            'nombre' => 'Karen Nayeli',
            'apellido_paterno' => 'Hernández',
            'apellido_materno' => 'González',
            'fecha_nacimiento' => '2001-09-19',
            'correo' => 'knayequeen@gmail.com',
            'estatus' => 'Activa'
        ]);

        Cliente::create([
            'nombre' => 'Paola Melissa',
            'apellido_paterno' => 'Méndez',
            'apellido_materno' => 'Jiménez',
            'fecha_nacimiento' => '2006-01-20',
            'correo' => 'mendez.paola.2a@gmail.com',
            'estatus' => 'Inactiva'
        ]);

        Cliente::create([
            'nombre' => 'Maximiliano',
            'apellido_paterno' => 'Soto',
            'apellido_materno' => 'Palao',
            'fecha_nacimiento' => '2006-09-22',
            'correo' => 'maxchoco@gmail.com',
            'estatus' => 'Inactiva'
        ]);

        Cliente::create([
            'nombre' => 'José Fernando',
            'apellido_paterno' => 'Ochoa',
            'apellido_materno' => 'Trejo',
            'fecha_nacimiento' => '2005-12-09',
            'correo' => 'ferchoco@gmail.com',
            'estatus' => 'Activa'
        ]);
    }
}
