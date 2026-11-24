<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = [//Crea usuarios en un arreglo
            [
                'name' => 'Administrador',
                'email' => 'coordinador@ideas',
            ],
        ];


        foreach ($usuarios as $usuario) { //Recorre el arreglo y crea lo necesario
        User::updateOrCreate(
            ['email' => $usuario['email']],
            [
            'name' => $usuario['name'],
            'password' => bcrypt('12345'),
            'rol' => $usuario['rol'],
            ]
        );
    }
  
}}
