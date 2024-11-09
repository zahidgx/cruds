<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('students.update', $student->id) }}" class="container p-5 border border-gray-300 rounded bg-light">
                    @csrf
                    @method('PUT')
                    
                    <!-- Nombre del producto -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre del producto</label>
                        <input id="name" name="name" type="text" value="{{ old('name', $student->name) }}" required class="form-control">
                    </div>

                    <!-- Descripción -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <textarea id="descripcion" name="descripcion" rows="4" class="form-control">{{ old('descripcion', $student->descripcion) }}</textarea>
                    </div>
                
                    <!-- Precio -->
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input id="precio" name="precio" type="text" value="{{ old('precio', $student->precio) }}" required class="form-control">
                    </div>

                    <!-- Stock -->
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input id="stock" name="stock" type="number" value="{{ old('stock', $student->stock) }}" required class="form-control">
                    </div>
                
                    <!-- Botones de acción -->
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('students.index') }}" class="btn btn-danger ms-2">Cancel</a>
                </form>
                
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Importar Bootstrap CSS desde CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">



