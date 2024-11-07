<?php

// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirigir a la página de estudiantes o la página que desees después del login
            return redirect()->intended(route('students.index'));
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Desloguea al usuario

        // Redirige a la página de bienvenida (welcome.blade.php)
        return redirect('/'); // Puedes cambiar esto a route('welcome') si prefieres usar una ruta con nombre
    }
}
