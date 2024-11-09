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
                    <a href="{{ route('pedidos.create') }}" class="btn btn-primary mb-3">Agregar pedido</a>
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
                                <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-success btn-sm">Editar</a>

                                <button onclick="confirmDelete({{ $pedido->id }})" class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="pagination">
                    {{ $pedidos->links() }}
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡Esta acción no se puede deshacer!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = `/pedidos/${id}`;
                form.innerHTML = `@csrf @method('DELETE')`;
                document.body.appendChild(form);
                form.submit();
            }
        });
    }
</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">




