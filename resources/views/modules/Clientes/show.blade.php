@extends('layout/main')
@section('Contenido')
    <div class="container mt-4">
        <h1>Detalle del Cliente</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $item->nombre }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $item->email }}</p>
                <p class="card-text"><strong>Teléfono:</strong> {{ $item->telefono }}</p>
                <p class="card-text"><strong>Activo:</strong> {{ $item->activo ? 'Sí' : 'No' }}</p>
                <div class="btn-group">
                    <a href="{{ route('index') }}" class="btn btn-secondary">Volver a la Lista</a>
                    &nbsp;
                    <form action="{{ route('destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar Cliente</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection