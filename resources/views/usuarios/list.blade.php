@extends('layouts.base')
<h1>Saludos desde la vista de listado</h1>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Usuarios Admin</h2>
            <a class="btn btn-success mb-4" href="{{ url('/form')}}">Agregar Usuario </a>
            @if(session('usuarioEliminado'))
                <div class="alert alert-success">
                    {{ session('usuarioEliminado') }}
                </div>
            @endif
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th>{{ $user->nombre }}</th>
                        <th>{{ $user->email }}</th>
                        <th>
                            <a href="{{ route('editform', $user->id) }}" class="btn btn-primary">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('delete', $user->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Borrar?');" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>
