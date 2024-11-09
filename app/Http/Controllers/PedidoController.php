<?php

namespace App\Http\Controllers;

use App\Models\Pedido; 
use Illuminate\Http\Request; 

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::paginate(10); // Obtener los pedidos
        return view('pedidos.pedidos', compact('pedidos')); // Retornar la vista
    }

    public function create()
    {
        return view('pedidos.pedidos-create'); // Vista para crear un nuevo pedido
    }

    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);  // Busca el usuario por ID o falla
        return view('usuarios.show', compact('usuario'));  // Devuelve la vista 'usuarios.show' pasando el usuario
    }

    public function store(Request $request)
    {
        // Validación de los datos de entrada
        $request->validate([
            'nombre_cliente' => 'required|string|max:255', // Asegúrate de validar el nombre del cliente
            'descripcion' => 'nullable|string',
            'ubicacion' => 'required|string|max:255',
            'enviado' => 'boolean',
        ]);
    
        // Crear un nuevo pedido
        $pedido = Pedido::create([
            'nombre_cliente' => $request->nombre_cliente, // Asegúrate de que este campo esté incluido
            'descripcion' => $request->descripcion,
            'ubicacion' => $request->ubicacion,
            'enviado' => $request->enviado ? 1 : 0, // Convierte a booleano
        ]);
    
        return redirect()->route('pedidos.index')->with('success', 'Pedido creado exitosamente.');
    }
    
    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id); // Asegúrate de que Pedido es el modelo correcto
        return view('pedidos.pedidos-edit', compact('pedido'));
    }

    public function update(Request $request, $id)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre_cliente' => 'required|string|max:255', // Cambiado de 'nombre' a 'nombre_cliente'
            'descripcion' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'enviado' => 'required|boolean',
        ]);

        // Encuentra el pedido por su ID
        $pedido = Pedido::findOrFail($id);

        // Actualiza los atributos del pedido
        $pedido->nombre_cliente = $request->nombre_cliente; // Cambiado de 'nombre' a 'nombre_cliente'
        $pedido->descripcion = $request->descripcion;
        $pedido->ubicacion = $request->ubicacion;
        $pedido->enviado = $request->enviado;

        // Guarda los cambios en la base de datos
        $pedido->save();

        // Redirige a la lista de pedidos con un mensaje de éxito
        return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado exitosamente.');
    }

    public function destroy($id)
{
    // Encuentra el pedido por su ID y lo elimina
    $pedido = Pedido::findOrFail($id);
    $pedido->delete();

    return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado exitosamente.');
}
}

