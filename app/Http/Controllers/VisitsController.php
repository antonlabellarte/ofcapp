<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visits;
use App\Models\Customers; // Per dropdown Clienti

class VisitsController extends Controller
{
    // Lista Visite
    public function index(){
        $visits = Visits::all();

        return view('visits.index', compact('visits'));
    }

    public function filter(Request $request){

        $dataUltimaVisita = $request->input('findDate');
        $cliente = $request->input('findCustomer');
        $agente = $request->input('findAgent');
        $attivita = $request->input('findActivity');
        $aggiornamenti = $request->input('findUpdate');
        $note = $request->input('findNote');

        $query = Visits::query();

        if ($dataUltimaVisita) {
            $query->where('ultima_visita', '=', $dataUltimaVisita);
        }

        if ($cliente) {
            $query->where('cliente', 'like', $cliente . '%');
        }

        if($agente) {
            $query->where('agente', '=', $agente);
        }

        if ($attivita) {
            $query->where('attivita', 'like', $attivita . '%');
        }

        if ($aggiornamenti) {
            $query->where('aggiornamenti', 'like', $aggiornamenti . '%');
        }

        if ($note) {
            $query->where('note', 'like', $note . '%');
        }

        $visits = $query->get();

        return view('visits.index', compact('visits'));
    }

    // Nuova Visita
    public function create(){
        
        $customers = Customers::all(); // Per dropdown Clienti

        return view('visits.add', compact('customers'));
    }

    // Salva Visita
    public function store(Request $request)
    {
        // Verifichiamo l'esistenza di un cliente
        $cliente = $request->input('cliente');

        // Preleva la visita
        $existingVisit = Visits::where('cliente', $cliente)->max('numero_visita');

        // Se la visita non esiste, mette 1, altrimenti incrementa
        $numeroVisita = $existingVisit ? $existingVisit + 1 : 1;


        $visit = new Visits();
        $visit->agente = $request->input('agente');
        $visit->cliente = $request->input('cliente');
        $visit->ultima_visita = $request->input('data');
        $visit->attivita = $request->input('attivita');
        $visit->aggiornamenti = $request->input('aggiornamenti');
        $visit->note = $request->input('note');
        $visit->numero_visita = $numeroVisita; // Imposta il numero della visita

        $visit->save();

        return redirect()->route('visits.create')->with('success', 'Visit created succesfully');
    }

    // Modifica Visite
    public function edit(string $id){
        $visit = Visits::find($id);

        $customers = Customers::all(); // Per dropdown Clienti

        return view('visits.edit', compact('visit', 'customers'));
    }

    // Aggiorna Visita
    public function update(Request $request, string $id){
        $visit = Visits::find($id);


        // Verifichiamo l'esistenza di un cliente
        $cliente = $request->input('cliente');

        // Preleva la visita
        $existingVisit = Visits::where('cliente', $cliente)->max('numero_visita');

        // Se la visita non esiste, mette 1, altrimenti incrementa
        $numeroVisita = $existingVisit ? $existingVisit + 1 : 1;

        $visit->agente = $request->input('agente');
        $visit->cliente = $request->input('cliente');
        $visit->ultima_visita = $request->input('data');
        $visit->attivita = $request->input('attivita');
        $visit->aggiornamenti = $request->input('aggiornamenti');
        $visit->note = $request->input('note');
        // $visit->numero_visita = $numeroVisita; // Imposta il numero della visita
        $visit->update($request->all());

        return redirect()->route('visits.edit', $visit->id)->with('success', 'Visita modificata e aggiornata');
    }

    // Elimina Visita
    public function destroy(string $id){
        $visit = Visits::find($id);
        $visit->delete();

        return redirect()->route('visits.index')->with('visitDeleted', 'Fornitore eliminato');
    }
}