<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Ejecuta las semillas de la base de datos.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Zahid',
            'email' => 'zahid3@gmail.com',
            'password' => bcrypt('gokucruz'),
            'role' => 'admin',  // Asigna el rol de administrador
        ]);
    }
}

