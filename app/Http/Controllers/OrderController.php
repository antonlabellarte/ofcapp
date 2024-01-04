<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Supplier;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::orderBy('id', 'asc')->get(); // Ordine alfabetico
        return view('orders.list', compact('orders'));
    }

    public function create(){
        // Create - Mostra la form per creare nuovi oggetti
        $customers = Customer::orderBy('id', 'asc')->get(); // CLIENTI
        $suppliers = Supplier::orderBy('id', 'asc')->get(); // Fornitori
        return view('orders.add', compact('customers'), compact('suppliers'));
    }

    public function store(Request $request) {
        // $request->validate([
        // 'nome_cliente'  => '',
        // 'partita_iva' => 'max:255',
        // 'codice_fiscale' => 'max:255',
        // 'telefono' => 'max:255',
        // 'fax' => 'max:255',
        // 'cellulare' => 'max:255',
        // 'citta' => 'max:255',
        // 'indirizzo' => 'max:255',
        // 'indirizzo_email' => 'max:255',
        // 'cap' => 'max:255',
        // 'pr' => 'max:255',
        // 'iban' => 'max:255',
        // 'chiusura' => 'max:255',
        // 'pec' => 'max:255',
        // 'sito_web' => 'max:255',
        // 'ag' => 'max:255',
        // 'zona' => 'max:255',
        // 'categoria_cliente' => 'max:255',
        // 'sdi' => 'max:255',
        // 'ragione_sociale' => 'max:255',
        // 'codice_cliente' => 'max:255',
        // 'responsabile' => 'max:255',
        // 'note' => 'max:255'
        // ]);
        
        // $customers = new Customer();
        // $customers->nome_cliente = $request->input('nome_cliente');
        // $customers->partita_iva = $request->input('partita_iva');
        // $customers->codice_fiscale = $request->input('codice_fiscale');
        // $customers->telefono = $request->input('telefono');
        // $customers->fax = $request->input('fax');
        // $customers->cellulare = $request->input('cellulare');
        // $customers->citta = $request->input('citta');
        // $customers->indirizzo = $request->input('indirizzo');
        // $customers->indirizzo_email = $request->input('indirizzo_email');
        // $customers->cap = $request->input('cap');
        // $customers->pr = $request->input('pr');
        // $customers->iban = $request->input('iban');
        // $customers->chiusura = $request->input('chiusura');
        // $customers->pec = $request->input('pec');
        // $customers->sito_web = $request->input('sito_web');
        // $customers->ag = $request->input('ag');
        // $customers->zona = $request->input('zona');
        // $customers->categoria_cliente = $request->input('categoria_cliente');
        // $customers->sdi = $request->input('sdi');
        // $customers->ragione_sociale = $request->input('ragione_sociale');
        // $customers->codice_cliente = $request->input('codice_cliente');
        // $customers->responsabile = $request->input('responsabile');
        // $customers->note = $request->input('note');
        // $customers->save();

        // return view('customers.addsuccess');
    }

    public function show($id){
        // Read - Mostra un singolo oggetto (dettaglio)
    }

    public function edit($id){
        // $customer = Customer::find($id);
        // return view('customers.edit', compact('customer'));
        
    }

    public function update(Request $request, $id){
        // $customer = Customer::find($id);
        // $request->validate([
        //     'nome_cliente'  => '',
        //     'partita_iva' => 'max:255',
        //     'codice_fiscale' => 'max:255',
        //     'telefono' => 'max:255',
        //     'fax' => 'max:255',
        //     'cellulare' => 'max:255',
        //     'citta' => 'max:255',
        //     'indirizzo' => 'max:255',
        //     'indirizzo_email' => 'max:255',
        //     'cap' => 'max:255',
        //     'pr' => 'max:255',
        //     'iban' => 'max:255',
        //     'chiusura' => 'max:255',
        //     'pec' => 'max:255',
        //     'sito_web' => 'max:255',
        //     'ag' => 'max:255',
        //     'zona' => 'max:255',
        //     'categoria_cliente' => 'max:255',
        //     'sdi' => 'max:255',
        //     'ragione_sociale' => 'max:255',
        //     'codice_cliente' => 'max:255',
        //     'responsabile' => 'max:255',
        //     'note' => 'max:255'
        // ]);

        // $customer->update($request->all());
        // return redirect()->route('customers.list')->with('success', 'Customer updated successfully');
    }

    public function destroy($id){
        // $customer = Customer::find($id);
        // $customer->delete();

        // return redirect()->route('customers.list')->with('success', 'Cliente eliminato con successo!');
    }
}
