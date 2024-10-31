<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    // Definir la tabla asociada si no sigue la convención de nombres
    protected $table = 'pedidos'; // Solo si la tabla no se llama 'pedidos'

    // Definir las columnas que son asignables en masa
    protected $fillable = [
        'nombre_cliente',  // Nombre de quien realizó el pedido
        'descripcion',     // Descripción del pedido
        'ubicacion',       // Ubicación del envío
        'enviado',         // Si se ha enviado o no
    ];

    // Definir las relaciones, si existen
    // Por ejemplo, si un pedido pertenece a un usuario
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    // Puedes agregar más relaciones aquí según sea necesario
}



