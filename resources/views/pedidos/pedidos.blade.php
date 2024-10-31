<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Pedidos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <a href="{{ route('pedidos.create') }}">Crear Pedido</a>
                </div>

                <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
                    <thead style="background-color: #4CAF50; color: white;">
                        <tr>
                            <th style="padding: 12px; border: 1px solid #ddd;">ID</th>
                            <th style="padding: 12px; border: 1px solid #ddd;">Nombre del cliente</th>
                            <th style="padding: 12px; border: 1px solid #ddd;">Descripción del pedido</th>
                            <th style="padding: 12px; border: 1px solid #ddd;">Ubicación</th>
                            <th style="padding: 12px; border: 1px solid #ddd;">¿Enviado?</th>
                            <th style="padding: 12px; border: 1px solid #ddd;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedidos as $pedido)
                        <tr style="background-color: #f9f9f9;">
                            <td style="padding: 12px; border: 1px solid #ddd;">{{ $pedido->id }}</td>
                            <td style="padding: 12px; border: 1px solid #ddd;">{{ $pedido->nombre_cliente }}</td>
                            <td style="padding: 12px; border: 1px solid #ddd;">{{ $pedido->descripcion }}</td>
                            <td style="padding: 12px; border: 1px solid #ddd;">{{ $pedido->ubicacion }}</td>
                            <td style="padding: 12px; border: 1px solid #ddd;">{{ $pedido->enviado ? 'Sí' : 'No' }}</td>
                            <td style="padding: 12px; border: 1px solid #ddd;">
                                <a href="{{ route('pedidos.edit', $pedido->id) }}" style="color: #4CAF50; text-decoration: none;">Editar</a>
                                <button onclick="confirmDelete({{ $pedido->id }})" style="background-color: #f44336; color: white; border: none; padding: 5px 10px; cursor: pointer;">Eliminar</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="pagination">
                    {{ $pedidos->links() }} <!-- Esto ahora funcionará -->
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.css"/>

<script>
    function confirmDelete(id) {
        alertify.confirm("¿Estás seguro de que quieres eliminar este pedido?", function (e) {
            if (e) {
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = `/pedidos/${id}`; // Cambia a la ruta correcta para los pedidos
                form.innerHTML = `<input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                  <input type='hidden' name='_method' value='DELETE'>`;
                document.body.appendChild(form);
                form.submit();
            } else {
                return false;
            }
        });
    }
</script>


