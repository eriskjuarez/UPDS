@extends('adminlte::page')

@section('title', 'Create Product')

@section('content_header')
    <h1>Crear proveedor</h1>
@stop

@section('content')

    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nombre del Proveedor</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="form-group">
            <label for="address">Dirección</label>
            <textarea name="address" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
