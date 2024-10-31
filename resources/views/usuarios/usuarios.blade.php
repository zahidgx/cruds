<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <a href="{{ route('usuarios.create') }}">Crear</a>
                </div>

                <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
                    <thead style="background-color: #4CAF50; color: white;">
                        <tr>
                            <th style="padding: 12px; border: 1px solid #ddd;">ID</th>
                            <th style="padding: 12px; border: 1px solid #ddd;">Nombre</th>
                            <th style="padding: 12px; border: 1px solid #ddd;">Correo electrónico</th>
                            <th style="padding: 12px; border: 1px solid #ddd;">Contraseña</th> <!-- Cambiado aquí -->
                            <th style="padding: 12px; border: 1px solid #ddd;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                        <tr style="background-color: #f9f9f9;">
                            <td style="padding: 12px; border: 1px solid #ddd;">{{ $usuario->id }}</td>
                            <td style="padding: 12px; border: 1px solid #ddd;">{{ $usuario->name }}</td>
                            <td style="padding: 12px; border: 1px solid #ddd;">{{ $usuario->email }}</td> 
                            <td style="padding: 12px; border: 1px solid #ddd;">******</td> <!-- Mostrando texto genérico -->
                            <td style="padding: 12px; border: 1px solid #ddd;">
                                <a href="{{ route('usuarios.edit', $usuario->id) }}" style="color: #4CAF50; text-decoration: none;">Editar</a>
                                <button onclick="confirmDelete({{ $usuario->id }})" style="background-color: #f44336; color: white; border: none; padding: 5px 10px; cursor: pointer;">Eliminar</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="pagination">
                    {{ $usuarios->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.css"/>

<script>
    function confirmDelete(id) {
        alertify.confirm("¿Estás seguro de que quieres eliminar este usuario?", function (e) {
            if (e) {
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = `/usuarios/${id}`;
                form.innerHTML = `@csrf @method('DELETE')`;
                document.body.appendChild(form);
                form.submit();
            } else {
                return false;
            }
        });
    }
</script>


