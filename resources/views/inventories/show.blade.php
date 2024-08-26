@extends('layouts.app')

@section('content')
    <h1>Detalle del Inventario</h1>

    <div class="card">
        <div class="card-header">
            {{ $inventory->item_name }}
        </div>
        <div class="card-body">
            <p><strong>Cantidad:</strong> {{ $inventory->quantity }}</p>
            <p><strong>Precio:</strong> {{ $inventory->price }}</p>
            <p><strong>Fecha:</strong> {{ $inventory->date }}</p>
            <p><strong>Proveedor:</strong> {{ $inventory->supplier->name }}</p>
        </div>
    </div>

    <a href="{{ route('inventories.index') }}" class="btn btn-primary mt-3">Volver</a>
@endsection
