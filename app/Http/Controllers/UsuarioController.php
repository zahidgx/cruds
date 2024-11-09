<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = User::paginate(2);
        return view('usuarios.usuarios', compact('usuarios')); 
    }

    public function edit($id)
{
    $usuario = User::findOrFail($id); 
    return view('usuarios.users-edit', compact('usuario'));
}
public function update(Request $request, $id)
{

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'password' => 'nullable|string|min:8|confirmed',
        'role' => 'required|in:admin,user', 
    ]);

    $usuario = User::findOrFail($id);

    $usuario->name = $request->name;
    $usuario->email = $request->email;

    if ($request->password) {
        $usuario->password = bcrypt($request->password);
    }

    $usuario->role = $request->role;
    $usuario->save();

    return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
}



public function create()
{
    return view('usuarios.users-create'); 
}

public function show(string $id)
    {
        //
    }

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'role' => 'required|in:admin,user',  
    ]);


    $usuario = new User();
    $usuario->name = $request->name;
    $usuario->email = $request->email;
    $usuario->password = bcrypt($request->password);
    $usuario->role = $request->role;  
    $usuario->save();

    return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente.');
}

public function destroy($id)
{
    // Encuentra el usuario por su ID y lo elimina
    $usuario = User::findOrFail($id);
    $usuario->delete();

    return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente.');
}
}



