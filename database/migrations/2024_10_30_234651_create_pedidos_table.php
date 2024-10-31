<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cliente'); // Nombre de quien se realizó el pedido
            $table->text('descripcion'); // Descripción del pedido
            $table->string('ubicacion'); // Ubicación
            $table->boolean('enviado')->default(false); // Si ya se envió o no
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
