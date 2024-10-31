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
            // Verifica si la columna 'precio' ya existe
            if (!Schema::hasColumn('students', 'precio')) {
                $table->decimal('precio', 8, 2)->nullable()->after('age'); // Agrega la columna 'precio'
            }

            // Agrega aquí la verificación para la columna 'stock' si es necesario
            if (!Schema::hasColumn('students', 'stock')) {
                $table->integer('stock')->nullable()->after('precio'); // Agrega la columna 'stock'
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            // Elimina la columna 'precio' solo si existe
            if (Schema::hasColumn('students', 'precio')) {
                $table->dropColumn('precio');
            }

            // Elimina la columna 'stock' solo si existe
            if (Schema::hasColumn('students', 'stock')) {
                $table->dropColumn('stock');
            }
        });
    }
};



