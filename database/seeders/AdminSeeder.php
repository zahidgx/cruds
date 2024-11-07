<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Crea un nuevo administrador
        $user = new User();
        $user->name = 'zahid';
        $user->email = 'al222310552@gmail.com';
        $user->password = bcrypt('gokucruz');  // Usa una contraseña segura
        $user->role = 'admin';  // Asigna el rol de 'admin'
        $user->save();

        echo "Administrador creado\n";
    }
}

