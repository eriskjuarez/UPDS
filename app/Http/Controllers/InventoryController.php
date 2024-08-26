<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Supplier;

class InventoryController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::with('supplier')->get();
        return view('inventories.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('inventories.create', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Inventory::create($request->all());
        return redirect()->route('inventories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('inventories.show', compact('inventory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $suppliers = Supplier::all();
        $inventory = Inventory::findOrFail($id); // Encuentra el inventario por su ID

        return view('inventories.edit', compact('inventory', 'suppliers'));
        }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            // Encuentra el inventario por su ID
        $inventory = Inventory::findOrFail($id);

        // Actualiza el inventario con los datos del formulario
        $inventory->update($request->all());

        // Redirige a la lista de inventarios
        return redirect()->route('inventories.index')->with('success', 'Inventario actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inventory->delete();
        return redirect()->route('inventories.index');
    }
}
