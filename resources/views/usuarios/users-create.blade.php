<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Formulario con el diseño proporcionado -->
                <form method="POST" action="{{ route('usuarios.store') }}" class="container p-5 border border-gray-300 rounded bg-light">
                    @csrf

                    <!-- Nombre del usuario -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" required class="form-control">
                    </div>

                    <!-- Correo electrónico -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required class="form-control">
                    </div>

                    <!-- Contraseña -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input id="password" name="password" type="password" required class="form-control">
                    </div>

                    <!-- Confirmar Contraseña -->
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required class="form-control">
                    </div>

                    <!-- Selección de Rol -->
                    <div class="mb-3">
                        <label for="role" class="form-label">Rol</label>
                        <select id="role" name="role" required class="form-control">
                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>Usuario Normal</option>
                        </select>
                    </div>

                    <!-- Botones de acción -->
                    <button type="submit" class="btn btn-success">Crear Usuario</button>
                    <a href="{{ route('usuarios.index') }}" class="btn btn-danger ms-2">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Importar Bootstrap CSS desde CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">




