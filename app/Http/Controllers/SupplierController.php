<?php

namespace App\Http\Controllers;
use App\Models\Supplier;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $suppliers = Supplier::orderBy('id', 'asc')->get(); // Ordine alfabetico
        return view('suppliers.list', compact('suppliers'));
    }

    public function create(){
        // Create - Mostra la form per creare nuovi oggetti
        return view('suppliers.add');
    }

    public function store(Request $request) {
        $request->validate([
            'codice_fornitore'  => '',
            'ditta' => 'max:255',
            'direzione' => 'max:255',
            'cellulare' => 'max:255',
            'direzione_mail' => 'max:255',
            'commerciale' => 'max:255',
            'email_commerciale' => 'max:255',
            'amministrazione' => 'max:255',
            'email_amministrazione' => 'max:255',
            'altre_posizioni' => 'max:255',
            'altre_email' => 'max:255',
            'telefono' => 'max:255',
            'fax' => 'max:255',
            'indirizzo' => 'max:255',
            'citta' => 'max:255',
            'pr' => 'max:255',
            'iban' => 'max:255',
            'ag' => 'max:255',
            'pec' => 'max:255',
            'sdi' => 'max:255',
            'partita_iva' => 'max:255',
            'pagamenti' => 'max:255',
            'cap' => 'max:255',
            'note' => 'max:255'
            ]);
            
            $suppliers = new Supplier();
            $suppliers->codice_fornitore = $request->input('codice_fornitore');
            $suppliers->ditta = $request->input('ditta');
            $suppliers->direzione = $request->input('direzione');
            $suppliers->commerciale = $request->input('commerciale');
            $suppliers->email_commerciale = $request->input('email_commerciale');
            $suppliers->altre_posizioni = $request->input('altre_posizioni');
            $suppliers->altre_email = $request->input('altre_email');
            $suppliers->telefono = $request->input('fax');
            $suppliers->fax = $request->input('fax');
            $suppliers->indirizzo = $request->input('fax');
            $suppliers->citta = $request->input('cellulare');
            $suppliers->pr = $request->input('pr');
            $suppliers->iban = $request->input('iban');
            $suppliers->ag = $request->input('ag');
            $suppliers->pec = $request->input('pec');
            $suppliers->sdi = $request->input('sdi');
            $suppliers->partita_iva = $request->input('partita_iva');
            $suppliers->pagamenti = $request->input('pagamenti');
            $suppliers->cap = $request->input('cap');
            $suppliers->note = $request->input('note');

            $suppliers->save();
    
            return view('customers.addsuccess');
    }

    public function show($id){
        // Read - Mostra un singolo oggetto (dettaglio)
        $supplier = Supplier::find($id);
        return view('suppliers.detail', compact('supplier'));
    }

    public function edit($id){
        // Update - Mostra la form per modificare un oggetto
        $supplier = Supplier::find($id);
        return view('suppliers.edit', compact('supplier'));
        
    }

    public function update(Request $request, $id){
        $supplier = Supplier::find($id);
        $request->validate([
            'codice_fornitore'  => '',
            'ditta' => 'max:255',
            'direzione' => 'max:255',
            'cellulare' => 'max:255',
            'direzione_mail' => 'max:255',
            'commerciale' => 'max:255',
            'email_commerciale' => 'max:255',
            'amministrazione' => 'max:255',
            'email_amministrazione' => 'max:255',
            'altre_posizioni' => 'max:255',
            'altre_email' => 'max:255',
            'telefono' => 'max:255',
            'fax' => 'max:255',
            'indirizzo' => 'max:255',
            'citta' => 'max:255',
            'pr' => 'max:255',
            'iban' => 'max:255',
            'ag' => 'max:255',
            'pec' => 'max:255',
            'sdi' => 'max:255',
            'partita_iva' => 'max:255',
            'pagamenti' => 'max:255',
            'cap' => 'max:255',
            'note' => 'max:255'
        ]);

        $supplier->update($request->all());
        return redirect()->route('suppliers.list')->with('success', 'supplier updated successfully');
    }

    public function destroy($id){
        $supplier = Supplier::find($id);
        $supplier->delete();

        return redirect()->route('suppliers.list')->with('success', 'Fornitore eliminato con successo!');
    }
}
