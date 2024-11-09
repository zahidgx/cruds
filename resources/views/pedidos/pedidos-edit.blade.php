<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Pedido') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('pedidos.update', $pedido->id) }}" class="container p-5 border border-gray-300 rounded bg-light">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nombre_cliente" class="form-label">Nombre del Cliente</label>
                        <input id="nombre_cliente" name="nombre_cliente" type="text" value="{{ old('nombre_cliente', $pedido->nombre_cliente) }}" required class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea id="descripcion" name="descripcion" rows="4" class="form-control">{{ old('descripcion', $pedido->descripcion) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="ubicacion" class="form-label">Ubicación</label>
                        <input id="ubicacion" name="ubicacion" type="text" value="{{ old('ubicacion', $pedido->ubicacion) }}" required class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="enviado" class="form-label">¿Enviado?</label>
                        <select id="enviado" name="enviado" required class="form-control">
                            <option value="1" {{ old('enviado', $pedido->enviado) ? 'selected' : '' }}>Sí</option>
                            <option value="0" {{ !old('enviado', $pedido->enviado) ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <a href="{{ route('pedidos.index') }}" class="btn btn-danger ms-2">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


