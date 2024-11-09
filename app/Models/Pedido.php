<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
   
    protected $table = 'pedidos'; 

   
    protected $fillable = [
        'nombre_cliente',  
        'descripcion',     
        'ubicacion',      
        'enviado',        
    ];


    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

   
}



