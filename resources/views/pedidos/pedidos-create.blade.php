<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Pedido') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Formulario con diseño de Bootstrap -->
                <form method="POST" action="{{ route('pedidos.store') }}" class="container p-5 border border-gray-300 rounded bg-light">
                    @csrf

                    <!-- Nombre del Cliente -->
                    <div class="mb-3">
                        <label for="nombre_cliente" class="form-label">Nombre del Cliente</label>
                        <input id="nombre_cliente" name="nombre_cliente" type="text" value="{{ old('nombre_cliente') }}" required class="form-control">
                    </div>

                    <!-- Descripción -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea id="descripcion" name="descripcion" required class="form-control">{{ old('descripcion') }}</textarea>
                    </div>

                    <!-- Ubicación -->
                    <div class="mb-3">
                        <label for="ubicacion" class="form-label">Ubicación</label>
                        <input id="ubicacion" name="ubicacion" type="text" value="{{ old('ubicacion') }}" required class="form-control">
                    </div>

                    <!-- ¿Enviado? -->
                    <div class="mb-3">
                        <label for="enviado" class="form-label">¿Enviado?</label>
                        <select id="enviado" name="enviado" required class="form-control">
                            <option value="0" {{ old('enviado') == 0 ? 'selected' : '' }}>No</option>
                            <option value="1" {{ old('enviado') == 1 ? 'selected' : '' }}>Sí</option>
                        </select>
                    </div>

                    <!-- Botones de acción -->
                    <button type="submit" class="btn btn-success">Crear Pedido</button>
                    <a href="{{ route('pedidos.index') }}" class="btn btn-danger ms-2">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Importar Bootstrap CSS desde CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


