@extends('adminlte::page')

@section('title', 'Edit Product')

@section('content_header')
    <h1>Editar Proveedor</h1>
@stop
@section('content')
    <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre del Proveedor</label>
            <input type="text" name="name" class="form-control" value="{{ $supplier->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" class="form-control" value="{{ $supplier->email }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="numeric" name="phone" class="form-control" value="{{ $supplier->phone }}">
        </div>

        <div class="form-group">
            <label for="address">Dirección</label>
            <textarea name="address" class="form-control">{{ $supplier->address }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop
