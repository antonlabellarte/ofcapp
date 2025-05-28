<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use App\Models\SuppliersPositions;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    // Lista Fornitori
    public function index()
    {
        $suppliers = Suppliers::all();

        return view('suppliers.index', compact('suppliers'));

    }

    public function filter(Request $request){

        $supplier = $request->input('findSupplier');

        $query = Suppliers::query();

        if ($supplier) {
            // StartsWith
            $query->where('ragione_sociale', 'like', $supplier . '%');
        }

        $suppliers = $query->get();

        return view('suppliers.index', compact('suppliers'));
    }

    // Nuovo fornitore
    public function create(){
        return view('suppliers.add');
    }
    // Salva fornitore
    public function store(Request $request)
    {
        $supplier = new Suppliers();
        $supplier->ditta = $request->input('ditta');
        $supplier->ragione_sociale = $request->input('rag_sociale');
        $supplier->indirizzo = $request->input('indirizzo');
        $supplier->citta = $request->input('citta');
        $supplier->provincia  = $request->input('provincia');
        $supplier->cap = $request->input('cap');
        $supplier->telefono  = $request->input('telefono');
        $supplier->fax = $request->input('fax');
        $supplier->pec = $request->input('pec');
        $supplier->direzione = $request->input('direzione');
        $supplier->telefono_direzione  = $request->input('tel_direzione');
        $supplier->mail_direzione = $request->input('direzione_mail');
        $supplier->commerciale  = $request->input('commercilae');
        $supplier->telefono_commerciale  = $request->input('tel_commerciale');
        $supplier->mail_commerciale  = $request->input('mail_commerciale');
        $supplier->amministrazione  = $request->input('amministrazione');
        $supplier->telefono_amministrazione = $request->input('tel_amministrazione');
        $supplier->mail_amministrazione   = $request->input('mail_amministrazione');
        $supplier->agente = $request->input('mail_commerciale');
        $supplier->sdi = $request->input('sdi');
        $supplier->iban = $request->input('iban');
        $supplier->partita_iva = $request->input('partita_iva');
        $supplier->costi_di_trasporto = $request->input('costi_trasporto');
        $supplier->condizioni_di_vendita = $request->input('condizioni_vendita');
        $supplier->minimo_dordine = $request->input('minimo_ordine');
        $supplier->pagamenti  = $request->input('pagamenti');
        $supplier->note = $request->input('note');
        $supplier->save();

        return redirect()->route('suppliers.create')->with('success', 'Part update successfully');
    }

   // Modifica fornitore
    public function edit(string $id)
    {
        $supplier = Suppliers::find($id);
        $positions = SuppliersPositions::where('id_fornitore', $id)->get();

        return view('suppliers.edit', compact('supplier', 'positions'));
    }

    // Aggiorna fornitore
    public function update(Request $request, string $id)
    {
        $supplier = Suppliers::find($id);

        
        $supplier->ditta = $request->input('ditta');
        $supplier->ragione_sociale = $request->input('ragione_sociale');
        $supplier->indirizzo = $request->input('indirizzo');
        $supplier->citta = $request->input('citta');
        $supplier->provincia = $request->input('provincia');
        $supplier->cap = $request->input('cap');
        $supplier->telefono = $request->input('telefono');
        $supplier->fax = $request->input('fax');
        $supplier->pec = $request->input('pec');
        $supplier->direzione = $request->input('direzione');
        $supplier->telefono_direzione = $request->input('tel_direzione');
        $supplier->mail_direzione = $request->input('direzione_mail');
        $supplier->commerciale = $request->input('commerciale');
        $supplier->telefono_commerciale = $request->input('tel_commerciale');
        $supplier->mail_commerciale = $request->input('mail_commerciale');
        $supplier->amministrazione = $request->input('amministrazione'); 
        $supplier->telefono_amministrazione = $request->input('tel_amministrazione');
        $supplier->mail_amministrazione = $request->input('mail_amministrazione');
        $supplier->agente = $request->input('agente');
        $supplier->sdi = $request->input('sdi');
        $supplier->iban = $request->input('iban');
        $supplier->partita_iva = $request->input('partita_iva');
        $supplier->costi_di_trasporto = $request->input('costi_trasporto');
        $supplier->condizioni_di_vendita = $request->input('condizioni_vendita');
        $supplier->minimo_dordine = $request->input('minimo_ordine');
        $supplier->pagamenti = $request->input('pagamenti');
        $supplier->note = $request->input('note');
        
        $supplier->update($request->all());

        return redirect()->route('suppliers.edit', $supplier->id)->with('supplierUpdated', 'Fornitore modificato ed aggironato');
    }

    // Elimina fornitore
    public function destroy(string $id)
    {
        $supplier = Suppliers::find($id);
        $supplier->delete();
        
        return redirect()->route('suppliers.index')->with('supplierDeleted', 'Fornitore eliminato');
    }

    /******************************/
    /*  Altre posizioni fornitori */
    /******************************/


    // Aggiungi nuova posizione
    public function storePosition(Request $request)
    {
        $position = new SuppliersPositions();
        $position->id_fornitore = $request->input('idFornitore');
        $position->altra_posizione = $request->input('posizioneFornitore');
        $position->telefono = $request->input('telefonoPosizioneFornitore');
        $position->mail = $request->input('mailPosizioneFornitore');
        $position->save();

        return back()->with('successPosition', 'Part update successfully');
    }


    // Form modifica posizione
    public function editPosition(string $id)
    {
        $position = SuppliersPositions::find($id);
        return view('suppliers.editPosition', compact('position'));
    }

    // Aggiorna Posizione (dopo submit da form modifica)
    public function updatePosition(Request $request, string $id)
    {
        $position = SuppliersPositions::find($id);

        $position->altra_posizione = $request->input('posizione');
        $position->telefono = $request->input('telefono');
        $position->mail = $request->input('mail');
        
        $position->update($request->all());

        return redirect()->route('positions.edit', $position->id)->with('positionUpdated', 'Posizione modificata e aggiornata');

    }

    // Elimina posizione (dopo conferma dal modal)
    public function destroyPosition(string $id)
    {
        $position = SuppliersPositions::find($id);
        $position->delete();
        
        return back()->with('positionDeleted', 'Posizione eliminata');
    }
}
