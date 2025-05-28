<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\CustomersCollaborators;
use App\Models\CustomersMails;
use App\Models\CustomersNumbers;

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

    public function filter(Request $request){

        $customer = $request->input('findCustomer');

        $query = Customers::query();

        if ($customer) {
            // StartsWith
            $query->where('ragione_sociale', 'like', $customer . '%');
        }

        $customers = $query->get();

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
        $collaborators = CustomersCollaborators::where('id_cliente', $id)->get();
        return view('customers.edit', compact('customer', 'collaborators'));
    }

    // Aggiorna cliente
    public function update(Request $request, string $id)
    {
        $customer = Customers::find($id);
        
        
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
        
        $customer->update($request->all());
        
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

    /*************************/
    /* Collaboratori clienti */
    /*************************/

    public function storeCollaborator(Request $request)
    {
        $collaborator = new CustomersCollaborators();
        $collaborator->id_cliente = $request->input('idCliente');
        $collaborator->responsabile_o_luogo = $request->input('collaboratoreCliente');
        $collaborator->cellulare = $request->input('cellulareCollaboratoreCliente');
        $collaborator->mail = $request->input('mailCollaboratoreCliente');
        $collaborator->ruolo = $request->input('ruoloCollaboratoreCliente');
        $collaborator->note = $request->input('noteCollaboratoreCliente');
        $collaborator->save();

        return back()->with('successCollaborator', 'Collaboratore aggiunto');
    }

    // Form modifica collaboratore
    public function editCollaborator(string $id)
    {
        $collaborator = CustomersCollaborators::find($id);
        return view('customers.editCollaborator', compact('collaborator'));
    }

    // Aggiorna collaboratore (dopo submit da form modifica)
    public function updateCollaborator(Request $request, string $id)
    {
        $collaborator = CustomersCollaborators::find($id);
        
        $collaborator->responsabile_o_luogo = $request->input('collaboratoreCliente');
        $collaborator->cellulare = $request->input('cellulareCollaboratoreCliente');
        $collaborator->mail = $request->input('mailCollaboratoreCliente');
        $collaborator->ruolo = $request->input('ruoloCollaboratoreCliente');
        $collaborator->note = $request->input('noteCollaboratoreCliente');

        $collaborator->update($request->all());

        return redirect()->route('collaborators.edit', $collaborator->id)->with('collaboratorUpdated', 'Collaboratore aggiornato');
    }

    // Elimina collaboratore (dopo conferma dal modal)
    public function destroyCollaborator(string $id)
    {
        $collaborator = CustomersCollaborators::find($id);
        $collaborator->delete();

        return back()->with('collaboratorDeleted', 'Collaboratore eliminato');
    }

    /****************/
    /* Mail clienti */
    /****************/

    public function storeMail(Request $request)
    {
        $mail = new CustomersCollaborators();
        $mail->id_cliente = $request->input('');
        $mail->save();

        return back()->with('successMail', 'Mail aggiunto');
    }

    // Form modifica collaboratore
    public function editMail(string $id)
    {
        $mail = CustomersMails::find($id);
        return view('customers.editMail', compact('mail'));
    }

    // Aggiorna collaboratore (dopo submit da form modifica)
    public function updateMail(Request $request, string $id)
    {
        $mail = CustomersMails::find($id);

        $mail->id_cliente = $request->input('');
        $mail->telefono = $request->input('');
        $mail->note = $request->input('');

        $mail->update($request->all());

        return redirect()->route('mails.edit', $mail->id)->with('mailUpdated', 'Mail aggiornata');
    }

    // Elimina collaboratore (dopo conferma dal modal)
    public function destroyMail(string $id)
    {
        $mail = CustomersMails::find($id);
        $mail->delete();

        return back()->with('mailDeleted', 'Mail eliminato');
    }
    /********************/
    /* Telefoni clienti */
    /********************/

    public function storeNumber(Request $request)
    {
        $number = new CustomersNumbers();
        $number->id_cliente = $request->input('');
        $number->telefono = $request->input('');
        $number->note = $request->input('');
        $number->save();

        return back()->with('successNumber', 'Numero aggiunto');
    }

    // Form modifica collaboratore
    public function editNumber(string $id)
    {
        $number = CustomersNumbers::find($id);
        return view('numbers.editCollaborator', compact('number'));
    }

    // Aggiorna collaboratore (dopo submit da form modifica)
    public function updateNumber(Request $request, string $id)
    {
        $number = CustomersNumbers::find($id);

        $number->id_cliente = $request->input('');
        $number->telefono = $request->input('');
        $number->note = $request->input('');

        $number->update($request->all());

        return redirect()->route('numbers.edit', $number->id)->with('numberUpdated', 'Numero aggiornato');
    }

    // Elimina collaboratore (dopo conferma dal modal)
    public function destroyNumber(string $id)
    {
        $number = CustomersNumbers::find($id);
        $number->delete();

        return back()->with('numberDeleted', 'Numero eliminato');
    }
}
