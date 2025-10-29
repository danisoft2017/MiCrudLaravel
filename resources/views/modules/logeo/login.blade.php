@extends('layout/dlogin')
@section('contenidologin')
    <div class="container mt-4 m-auto" style="max-width: 500px;">

        <h1>Iniciar Sesión</h1>
        <form action="{{route('logeo')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
    </div>
@endsection