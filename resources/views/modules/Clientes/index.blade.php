@extends('layout/main')
@section('Contenido')
    <div class="container mt-4">
        <h1>Lista de Clientes</h1>
        <a href="{{route('create')}}" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Nuevo Cliente</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Activo</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @forelse($item as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->activo ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="{{route('edit',$cliente->id)}}" class="btn btn-sm btn-warning">Editar</a>
                        <a href="{{route('show',$cliente->id)}}" class="btn btn-sm btn-danger">Eliminar</a>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="5">No hay clientes disponibles.</td>
                    </tr>
                @endforelse
                

            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $item->links() }}
        </div>
    </div>
@endsection