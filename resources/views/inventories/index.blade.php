@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1>Inventarios</h1>
@stop
@section('content')
    <a href="{{ route('inventories.create') }}" class="btn btn-primary">Nuevo Inventario</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Ítem</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Fecha</th>
                <th>Proveedor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->item_name }}</td>
                    <td>{{ $inventory->quantity }}</td>
                    <td>{{ $inventory->price }}</td>
                    <td>{{ $inventory->date }}</td>
                    <td>{{ $inventory->supplier->name }}</td>
                    <td>
                        <a href="{{ route('inventories.edit', $inventory->id) }}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('inventories.show', $inventory) }}" class="btn btn-info btn-sm">Detalle</a>
                        <form action="{{ route('inventories.destroy', $inventory->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
