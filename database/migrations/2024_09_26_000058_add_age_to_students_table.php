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
            // Verifica si la columna 'age' ya existe
            if (!Schema::hasColumn('students', 'age')) {
                $table->integer('age')->after('name'); // Agrega la columna 'age' después de 'name'
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            // Elimina la columna 'age' solo si existe
            if (Schema::hasColumn('students', 'age')) {
                $table->dropColumn('age'); // Elimina la columna 'age'
            }
        });
    }
};


