<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            // Verifica si la columna 'name' ya existe
            if (!Schema::hasColumn('students', 'name')) {
                $table->string('name')->after('id'); // Agrega la columna 'name' después de 'id'
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            // Elimina la columna 'name' solo si existe
            if (Schema::hasColumn('students', 'name')) {
                $table->dropColumn('name'); // Elimina la columna 'name'
            }
        });
    }
};


