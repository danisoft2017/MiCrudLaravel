@extends('layout/main')
@section('Contenido')
    <div class="container mt-4">
        <h1>Crear Nuevo Cliente</h1>
        <form action="{{route('store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="activo" name="activo">
                <label class="form-check-label" for="activo">Activo</label>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cliente</button>
            <a href="{{route('index')}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection