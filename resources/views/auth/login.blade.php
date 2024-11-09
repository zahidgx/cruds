<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Entrar</button>
    </form>

    <!-- Mostrar mensaje de error de la sesión -->
    @if(session('error'))
        <div style="color: red; background-color: #f8d7da; padding: 10px; border-radius: 5px;">
            {{ session('error') }}
        </div>
    @endif

    <!-- Mostrar errores de validación si los hay -->
    @if ($errors->any())
        <div>{{ $errors->first() }}</div>
    @endif
</body>
</html>

