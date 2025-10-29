@extends('layout/main')
@section('Contenido')
    <div class="container mt-4">
        <h1>Panel de Control</h1>
        <div class="btngroup">
            <a href="{{route('index')}}" class="btn btn-danger">Clientes</a>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="btn btn-danger">Salir</button>
            </form>
        </div>
        <p>Bienvenido al panel de control de la aplicación.</p>
    </div>
@endsection