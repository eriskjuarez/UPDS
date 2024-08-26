@extends('adminlte::page')

@section('title', 'Product Details')

@section('content_header')
    <h1>Detalle del Proveedor</h1>
@stop
@section('content')

    <div class="card">
        <div class="card-header">
            {{ $supplier->name }}
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $supplier->email }}</p>
            <p><strong>Teléfono:</strong> {{ $supplier->phone }}</p>
            <p><strong>Dirección:</strong> {{ $supplier->address }}</p>
        </div>
    </div>

    <a href="{{ route('suppliers.index') }}" class="btn btn-primary mt-3">Volver</a>
@stop
