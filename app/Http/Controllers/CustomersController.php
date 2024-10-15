<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customers::all();

        return view('customers.index', compact('customers'));
    }

    public function create() {
        return view('customers.add');
    }
    public function store(Request $request)
    {
        $customer = new Customers();
        $customer->cliente = $request->input('cliente');
        $customer->ragione_sociale = $request->input('ragione_sociale');
        $customer->codice_fiscale = $request->input('codfiscale');
        $customer->indirizzo = $request->input('indirizzo');
        $customer->citta = $request->input('citta');
        $customer->provincia = $request->input('provincia');
        $customer->cap = $request->input('cap');
        $customer->regione = $request->input('regione');
        $customer->fax = $request->input('fax');
        $customer->sito = $request->input('sito');
        $customer->chiusura = $request->input('chiusura');
        $customer->categoria = $request->input('categoria');
        $customer->pec = $request->input('pec');
        $customer->agente = $request->input('agente');
        $customer->sdi = $request->input('sdi');
        $customer->iban = $request->input('iban');
        $customer->partita_iva = $request->input('partitaiva');
        $customer->responsabile_scarico = $request->input('responsabilescarico');
        $customer->citta_scarico = $request->input('cittascarico');
        $customer->telefono_responsabile_scarico = $request->input('telefonoresponsabilescarico');
        $customer->note = $request->input('note');

        $customer->save();

        return redirect()->route('customers.create')->with('success', 'Part update successfully');
    }

    // Modifica cliente
    public function edit(string $id)
    {
        $customer = Customers::find($id);
        return view('customers.edit', compact('customer'));
    }

    // Aggiorna cliente
    public function update(Request $request, string $id)
    {
        $customer = Customers::find($id);
        
        $customer->update($request->all());
        
        $customer->cliente = $request->input('cliente');
        $customer->ragione_sociale = $request->input('ragione_sociale');
        $customer->codice_fiscale = $request->input('codfiscale');
        $customer->indirizzo = $request->input('indirizzo');
        $customer->citta = $request->input('città');
        $customer->provincia = $request->input('provincia');
        $customer->cap = $request->input('cap');
        $customer->regione = $request->input('regione');
        $customer->telefono = $request->input('telefono');
        $customer->sito = $request->input('sito');
        $customer->chiusura = $request->input('chiusura');
        $customer->pec = $request->input('pec');
        $customer->agente = $request->input('agente');
        $customer->sdi = $request->input('sdi');
        $customer->iban = $request->input('iban');
        $customer->partitaiva = $request->input('partitaiva');
        $customer->responsabile_scarico = $request->input('responsabilescarico');
        $customer->indirizzo_scarico = $request->input('indirizzoscarico');
        $customer->citta_scarico = $request->input('cittascarico');
        $customer->telefono_responsabile_scarico = $request->input('telresponsabilescarico');
        $customer->note = $request->input('note');

        
        return redirect()->route('customers.edit', $customer->id)->with('customerUpdated', 'Ordine modificato ed aggironato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customers::find($id);
        $customer->delete();
        
        return redirect()->route('customers.index')->with('customerDeleted', 'Cliente eliminato');
    }
}
