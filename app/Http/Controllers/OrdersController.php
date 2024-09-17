<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orders;
use App\Models\Customers;
use App\Models\Suppliers;

class OrdersController extends Controller
{
    // Mostra gli ordini
    public function index(){
        $orders = Orders::all();

        // Clienti per select (dropdown)
        $customers = Customers::all();

        // Fornitori per select (dropdown)
        $suppliers = Suppliers::all();
        return view('orders.index', compact('orders', 'customers', 'suppliers'));
    }

    public function filter(Request $request){
        
        $customers = Customers::all();
        $suppliers = Suppliers::all();

        $data = $request->input('data');
        $customer = $request->input('customers');
        $supplier = $request->input('suppliers');

        $query = Orders::query();
        if ($data) {
            $query->where('data', '=', $data);
        }

        if ($customer) {
            $query->where('data', '=', $customer);
        }

        if ($supplier) {
            $query->where('data', '=', $supplier);
        }

        $orders = $query->get();

        return view('orders.index', compact('orders', 'customers', 'suppliers'));
    }

    // Crea ordine
    public function create(){
        // Clienti per select
        $customers = Customers::all();

        // Fornitori per select
        $suppliers = Suppliers::all();
        return view('orders.add', compact('customers', 'suppliers'));
    }
    public function store(Request $request){
        $order = new Orders();
        $order->data = $request->input('data');
        $order->id_cliente = $request->input('cliente');
        $order->id_fornitore = $request->input('fornitore');
        $order->agente = $request->input('agente');
        $order->descrizione = $request->input('descrizione');
        $order->codice_ordine = $request->input('codiceOrdine');
        $order->pagamento = $request->input('pagamento');
        $order->oneri_vari = $request->input('oneriVari');
        $order->codice_articolo = $request->input('codiceArticolo');
        $order->importo_cadauno = $request->input('importoCadauno');
        $order->quantita = $request->input('quantita');
        $order->sconto = $request->input('sconto');
        $order->importo_totale = $request->input('importoTotale');
        $order->note = $request->input('note');

        // Salvataggio
        $order->save();

        return redirect()->route('orders.create')->with('success', 'Part update successfully');
    }

    // Modifica Ordine
    public function edit(string $id)
    {
        $order = Orders::find($id);
        
        // Clienti per select
        $customers = Customers::all();

        // Fornitori per select
        $suppliers = Suppliers::all();

        return view('orders.edit', compact('order', 'customers', 'suppliers'));
    }

    // Aggiorna Ordine
    public function update(Request $request, string $id)
    {
        $order = Orders::find($id);
        
        $order->update($request->all());
        
        $order->data = $request->input('data');
        $order->id_cliente = $request->input('cliente');
        $order->id_fornitore = $request->input('fornitore');
        $order->agente = $request->input('agente');
        $order->descrizione = $request->input('descrizione');
        $order->codice_ordine = $request->input('codiceOrdine');
        $order->pagamento = $request->input('pagamento');
        $order->oneri_vari = $request->input('oneriVari');
        $order->codice_articolo = $request->input('codiceArticolo');
        $order->importo_cadauno = $request->input('importoCadauno');
        $order->quantita = $request->input('quantita');
        $order->sconto = $request->input('sconto');
        $order->importo_totale = $request->input('importoTotale');
        $order->note = $request->input('note');

        $order->update($request->all());
        
        return redirect()->route('orders.edit', $order->id)->with('orderUpdated', 'Ordine modificato ed aggironato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Orders::find($id);
        $order->delete();
        
        return redirect()->route('orders.index')->with('orderDeleted', 'Ordine eliminato');
    }
}
