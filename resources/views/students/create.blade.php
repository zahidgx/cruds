<form method="POST" action="{{ route('students.store') }}" class="container p-5 border border-gray-300 rounded bg-light">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Nombre del producto</label>
        <input id="name" name="name" type="text" required class="form-control">
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea id="descripcion" name="descripcion" rows="4" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input id="precio" name="precio" type="text" required class="form-control">
    </div>

    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input id="stock" name="stock" type="number" required class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{ route('students.index') }}" class="btn btn-danger ms-2">Cancel</a>
</form>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">



