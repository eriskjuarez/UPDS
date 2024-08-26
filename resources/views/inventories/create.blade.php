@extends('adminlte::page')

@section('title', 'Crear Inventario')

@section('content_header')
    <h1>Crear Inventario</h1>
@stop

@section('content')
<form action="{{ route('inventories.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="item_name">Nombre del Ítem</label>
        <input type="text" name="item_name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="quantity">Cantidad</label>
        <input type="number" name="quantity" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="price">Precio</label>
        <input type="number" step="0.01" name="price" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="date">Fecha</label>
        <input type="date" name="date" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="supplier_id">Proveedor</label>
        <select name="supplier_id" class="form-control" required>
            @foreach($suppliers as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop
