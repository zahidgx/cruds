<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Pedido') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('pedidos.update', $pedido->id) }}" style="max-width: 400px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; background-color: #f9f9f9;">
                    @csrf
                    @method('PUT')
                    
                    <div style="margin-bottom: 15px;">
                        <label for="nombre_cliente" style="display: block; margin-bottom: 5px;">Nombre del Cliente</label>
                        <input id="nombre_cliente" name="nombre_cliente" type="text" value="{{ old('nombre_cliente', $pedido->nombre_cliente) }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label for="descripcion" style="display: block; margin-bottom: 5px;">Descripción</label>
                        <textarea id="descripcion" name="descripcion" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">{{ old('descripcion', $pedido->descripcion) }}</textarea>
                    </div>
                
                    <div style="margin-bottom: 15px;">
                        <label for="ubicacion" style="display: block; margin-bottom: 5px;">Ubicación</label>
                        <input id="ubicacion" name="ubicacion" type="text" value="{{ old('ubicacion', $pedido->ubicacion) }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label for="enviado" style="display: block; margin-bottom: 5px;">¿Enviado?</label>
                        <select id="enviado" name="enviado" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                            <option value="1" {{ old('enviado', $pedido->enviado) ? 'selected' : '' }}>Sí</option>
                            <option value="0" {{ !old('enviado', $pedido->enviado) ? 'selected' : '' }}>No</option>
                        </select>
                    </div>
                
                    <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">Actualizar</button>
                    <a href="{{ route('pedidos.index') }}" style="margin-left: 10px; color: #f44336; text-decoration: none;">Cancelar</a>
                </form>
                
            </div>
        </div>
    </div>
</x-app-layout>

