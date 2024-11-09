<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica si el usuario está autenticado y es un administrador
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Si no es admin, redirige a la página de inicio o muestra un mensaje de error
        return redirect('login')->with('error', 'No eres permisos para realizar esta accion, Inicia sesion como administrador!!');
    }
}


