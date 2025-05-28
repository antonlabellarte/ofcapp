@include('partials.top')
@include('partials.navbar')
    

<!-- Conferma cliente inserito -->
@if (session('success'))
<div class="container" style="margin-top: 70px; padding: 20px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
    <span><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
        Cliente inserito correttamente</span>
    </div>
@endif

<!-- Conferma collaboratore inserito -->
@if (session('successCollaborator'))
<div class="container" style="margin-top: 70px; padding: 20px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
    <span><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
        Collaboratore aggiunto correttamente</span>
    </div>
@endif

@if (session('customerUpdated'))
<p id="validationAlert" style="padding: 10px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
    Cliente modificato ed aggiornato.
</p>
@endif

<!-- Lista clienti -->

<div class="container">
    <div class="row">
        <div class="col-3">
            <h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/></svg>
                Dati cliente ID: {{ $customer->id }}
            </h5><br>
            <form action="{{ route('customers.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')
            Cliente<br>
            <input type="text" id="cliente" name="cliente" value="{{ $customer->cliente }}"><br>
            Ragione sociale<br>
            <input type="text" id="ragione_sociale" name="ragione_sociale" value="{{ $customer->ragione_sociale }}"><br>
            Cod.fiscale<br>
            <input type="text" id="codfiscale" name="codfiscale" value="{{ $customer->codice_fiscale }}"><br>
            Indirizzo<br>
            <input type="text" id="indirizzo" name="indirizzo" value="{{ $customer->indirizzo }}"><br>
            Città<br>
            <input type="text" id="citta" name="citta" value="{{ $customer->città }}"><br>
            Provincia<br>
            <input type="text" id="provincia" name="provincia" value="{{ $customer->provincia }}"><br>
            CAP<br>
            <input type="text" id="cap" name="cap" value="{{ $customer->cap }}"><br>
            Regione<br>
            <select name="regione" id="regione">
                <option selected>{{ $customer->regione }}</option>
                <option value="Abruzzo">Abruzzo</option>
                <option value="Basilicata">Basilicata</option>
                <option value="Calabria">Calabria</option>
                <option value="Campania">Campania</option>
                <option value="Emilia-Romagna">Emilia-Romagna</option>
                <option value="Friuli Venezia Giulia">Friuli Venezia Giulia</option>
                <option value="Lazio">Lazio</option>
                <option value="Liguria">Liguria</option>
                <option value="Lombardia">Lombardia</option>
                <option value="Marche">Marche</option>
                <option value="Molise">Molise</option>
                <option value="Piemonte">Piemonte</option>
                <option value="Puglia">Puglia</option>
                <option value="Sardegna">Sardegna</option>
                <option value="Sicilia">Sicilia</option>
                <option value="Toscana">Toscana</option>
                <option value="Trentino-Alto Adige">Trentino-Alto Adige</option>
                <option value="Umbria">Umbria</option>
                <option value="Valle d'Aosta">Valle d'Aosta</option>
                <option value="Veneto">Veneto</option>
            </select><br>                    
            Telefono<br>
            <input type="text" id="telefono" name="telefono" value="{{ $customer->telefono }}"><br>
            Fax<br>
            <input type="text" id="fax" name="fax" value="{{ $customer->fax }}"><br>
            Sito<br>
            <input type="text" id="sito" name="sito" value="{{ $customer->sito }}"><br>
            Chiusura<br>
            <input type="text" id="chiusura" name="chiusura" value="{{ $customer->chiusura }}"><br>
            Categoria<br>
            <select name="categoria" id="categoria">
                <option selected>{{ $customer->categoria }}"</option>
                <option value="ARREDAMENTO">ARREDAMENTO</option>
                <option value="ARREDAMENTO COMPLETO">ARREDAMENTO COMPLETO</option>
                <option value="ARREDAMENTO SPEC.TO LUCI">ARREDAMENTO SPEC.TO LUCI</option>
                <option value="ARREDO BAGNI">ARREDO BAGNI</option>
                <option value="ARREDO BAGNO">ARREDO BAGNO</option>
                <option value="ARREDO ESTERNO">ARREDO ESTERNO</option>
                <option value="ARREDO PER ESTERNI">ARREDO PER ESTERNI</option>
                <option value="CLIENTE DIRETTO">CLIENTE DIRETTO</option>
                <option value="COMMERCIO ESTERO">COMMERCIO ESTERO</option>
                <option value="COMPLEMENTI">COMPLEMENTI</option>
                <option value="CONTRACT">CONTRACT</option>
                <option value="ILLUMINAZIONE">ILLUMINAZIONE</option>
                <option value="OUTDOOR">OUTDOOR</option>
                <option value="PORTE/PAVIMENTI/RIVESTIMENTI">PORTE/PAVIMENTI/RIVESTIMENTI</option>
                <option value="TENDAGGI E RIVESTIMENTI">TENDAGGI E RIVESTIMENTI</option>
            </select><br>
            PEC<br>
            <input type="text" id="pec" name="pec" value="{{ $customer->pec }}"><br>
            Agente<br>
            <select name="agente" id="agente">
                <option selected>{{ $customer->agente }}"</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="A|B">A|B</option>
            </select><br>
            SDI<br>
            <input type="text" id="sdi" name="sdi" value="{{ $customer->sdi }}"><br>
            Iban<br>
            <input type="text" id="iban" name="iban" value="{{ $customer->iban }}"><br>
            Partita IVA<br>
            <input type="text" id="partitaiva" name="partitaiva" value="{{ $customer->partita_iva }}"><br>
            Responsabile scarico<br>
            <input type="text" id="responsabilescarico" name="responsabilescarico" value="{{ $customer->responsabile_scarico }}"><br>
            Indirizzo scarico<br>
            <input type="text" id="indirizzoscarico" name="indirizzoscarico" value="{{ $customer->indirizzo_scarico }}"><br>
            Città scarico<br>
            <input type="text" id="cittascarico" name="cittascarico" value="{{ $customer->città_scarico }}"><br>
            Tel. responsabile scarico<br>
            <input type="text" id="telresponsabilescarico" name="telresponsabilescarico" value="{{ $customer->telefono_responsabile_scarico }}"><br>
            Note<br>
            <textarea rows="6" id="note" name="note">
                {{ $customer->note }}
            </textarea><br>
            <button type="submit" class="btn btn" style="margin-top: 10px; width: 100%;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16"><path d="M11 2H9v3h2z"/><path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/></svg>
                Salva
            </a>
        </form>
        </div>
        <div class="col-3">
            <h5>Collaboratori</h5><br>
            <button onclick="showAddCollaboratorForm()" class="btn btn" id="addCollaboratorBtn" style="width: fit-content; margin-bottom: 10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16"><path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/><path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/></svg>
                Aggiungi collaboratore
            </button><br>
            
            @if (count($collaborators) > 0)
                <button style="width: fit-content;" style="margin-top: 10px;" id="deleteAllCollaborators">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-x" viewBox="0 0 16 16"><path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31zm6.339-1.577A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139q.323-.119.684-.12h5.396z"/><path d="M11.854 10.146a.5.5 0 0 0-.707.708L12.293 12l-1.146 1.146a.5.5 0 0 0 .707.708L13 12.707l1.146 1.147a.5.5 0 0 0 .708-.708L13.707 12l1.147-1.146a.5.5 0 0 0-.707-.708L13 11.293z"/></svg>
                    Elimina tutto
                </button><br>
            @endif

            <form action="{{ route('collaborators.store') }}" method="POST" id="newCollaborator" style="display: none; background-color: #f3f3f3; border-radius: 5px; padding: 10px;">
                @csrf
                <span>
                    <h5 style="float: left;">Nuovo collaboratore</h5> 
                    <button type="button" onclick="closeAddCollaboratorForm()" style="float: right;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/></svg>
                        Annulla
                    </button>
                </span><br>
                <input type="text" name="idCliente" id="idCliente" value="{{ $customer->id }}">
                <label for="position" style="margin-top: 10px;">Responsabile o luogo:</label>
                <input type="text" id="collaboratoreCliente" name="collaboratoreCliente"><br>
                <label for="position" style="margin-top: 10px;">Cellulare:</label>
                <input type="text" id="cellulareCollaboratoreCliente" name="cellulareCollaboratoreCliente"><br>
                <label for="position" style="margin-top: 10px;">Mail:</label>
                <input type="text" id="mailCollaboratoreCliente" name="mailCollaboratoreCliente"><br>
                <label for="position" style="margin-top: 10px;">Ruolo:</label>
                <input type="text" id="ruoloCollaboratoreCliente" name="ruoloCollaboratoreCliente"><br>
                <label for="position" style="margin-top: 10px;">Note:</label>
                <input type="text" id="noteCollaboratoreCliente" name="noteCollaboratoreCliente"><br>
                <button type="submit" style="margin-top: 10px;">Invia</button>
            </form>

            @foreach ($collaborators as $collaborator)

            <div class="modal fade" id="collaboratorModal{{ $collaborator->id }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="collaboratorModalLabel">⚠ Attenzione</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="font-weight: bold;">
                            Sei sicuro di voler eliminare il collaboratore "{{ $collaborator->responsabile_o_luogo }}" ?
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('collaborators.destroy', $collaborator->id )}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn">Elimina</button>
                                <button type="button" class="btn btn" data-bs-dismiss="modal">Annulla</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="col-sm" style="float: left;">
                    <span style="float: left;">
                        <strong>{{ $collaborator->responsabile_o_luogo }}</strong><br>
                        {{ $collaborator->cellulare }}<br>
                        {{ $collaborator->mail }}<br>
                        {{ $collaborator->ruolo }}<br>
                        {{ $collaborator->note }}<br>
                    </span>                
                    <span style="float: right;">
                        <a class="btn btn" href="{{ route('collaborators.edit', $collaborator->id) }}" style="width: 120px; margin-bottom: 10px;">Modifica</a><br>
                        <button style="width: 120px;" data-bs-toggle="modal" data-bs-target="#collaboratorModal{{ $collaborator->id }}">
                                <!-- SVG per elimina -->
                                Elimina
                        </button>
                    </span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-3">
            <h5>Mail</h5><br>
        </div>
        <div class="col-3">
            <h5>Telefoni</h5><br>
        </div>
    </div>
</div>

<script>
    function showAddCollaboratorForm(){

        // Form in vista
        document.getElementById('newCollaborator').style.display = 'block';

        // Temporanea chiusura bottone "Aggiungi posizione"
        document.getElementById('addCollaboratorBtn').style.display = 'none';

        // Leggero scroll in basso
        window.scrollBy({
            top: 450, // numero di pixel da scorrere verso il basso
            left: 0,
            behavior: 'smooth' // per uno scroll fluido
        });
    }

    function closeAddCollaboratorForm(){

        // Chiusura form
        document.getElementById('newCollaborator').style.display = 'none';

        // Bottone "Aggiungi posizione" in vista
        document.getElementById('addCollaboratorBtn').style.display = 'block';
    }
</script>
@include('partials.bottom')

