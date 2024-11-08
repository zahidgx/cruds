<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}" style="max-width: 400px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; background-color: #f9f9f9;">
                    @csrf
                    @method('PUT')
                    
                    <div style="margin-bottom: 15px;">
                        <label for="name" style="display: block; margin-bottom: 5px;">Nombre</label>
                        <input id="name" name="name" type="text" value="{{ old('name', $usuario->name) }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label for="email" style="display: block; margin-bottom: 5px;">Correo electrónico</label>
                        <input id="email" name="email" type="email" value="{{ old('email', $usuario->email) }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label for="password" style="display: block; margin-bottom: 5px;">Contraseña</label>
                        <input id="password" name="password" type="password" placeholder="Dejar en blanco si no se cambia" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    </div>
                
                    <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">Actualizar</button>
                    <a href="{{ route('usuarios.index') }}" style="margin-left: 10px; color: #f44336; text-decoration: none;">Cancelar</a>
                </form>
                
            </div>
        </div>
    </div>
</x-app-layout>

