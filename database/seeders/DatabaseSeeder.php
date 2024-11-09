<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Llama al seeder que acabamos de crear
        $this->call(AdminUserSeeder::class);
    }
    
}

