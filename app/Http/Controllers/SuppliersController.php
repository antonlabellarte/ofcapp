<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    // Lista Fornitori
    public function index()
    {
        $suppliers = Suppliers::all();

        return view('suppliers.index', compact('suppliers'));

    }

    // Nuovo fornitore
    public function create(){
        return view('suppliers.add');
    }
    // Salva fornitore
    public function store(Request $request)
    {
        //
    }

   // Modifica fornitore
    public function show(string $id)
    {
        //
    }

    // Aggiorna fornitore
    public function update(Request $request, string $id)
    {
        //
    }

    // Elimina fornitore
    public function destroy(string $id)
    {
        $supplier = Suppliers::find($id);
        $supplier->delete();
        
        return redirect()->route('suppliers.index')->with('supplierDeleted', 'Fornitore eliminato');
    }
}
