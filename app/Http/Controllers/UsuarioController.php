<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = User::paginate(10); // Obtener los usuarios
        return view('usuarios.usuarios', compact('usuarios')); // Retornar la vista
    }

    public function edit($id)
{
    $usuario = User::findOrFail($id); // Asegúrate de que User es el modelo correcto
    return view('usuarios.users-edit', compact('usuario'));
}
public function update(Request $request, $id)
{
    // Validación de los datos del formulario
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'password' => 'nullable|string|min:8|confirmed', // Asegúrate de que tenga confirmación si se va a cambiar
    ]);

    // Encuentra al usuario por su ID
    $usuario = User::findOrFail($id);

    // Actualiza los atributos del usuario
    $usuario->name = $request->name;
    $usuario->email = $request->email;

    // Si se proporciona una nueva contraseña, actualízala
    if ($request->filled('password')) {
        $usuario->password = Hash::make($request->password); // Asegúrate de importar Hash
    }

    // Guarda los cambios en la base de datos
    $usuario->save();

    // Redirige a la lista de usuarios con un mensaje de éxito
    return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
}

// Método para mostrar el formulario de creación
public function create()
{
    return view('usuarios.users-create'); // Asegúrate de que la vista se llama correctamente
}

// Método para almacenar el nuevo usuario
public function store(Request $request)
{
    try {
        // Validar los datos de entrada
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crear un nuevo usuario
        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password); // Almacenar la contraseña de forma segura
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente.');

    } catch (\Exception $e) {
        return back()->withErrors(['error' => $e->getMessage()]);
    }
    
}
public function destroy($id)
{
    // Encuentra el usuario por su ID y lo elimina
    $usuario = User::findOrFail($id);
    $usuario->delete();

    return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente.');
}
}



