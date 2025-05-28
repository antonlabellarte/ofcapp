@include('partials.top')
@include('partials.navbar')
    
@if (session('success'))
<div class="container" style="margin-top: 70px; padding: 20px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
    <span><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
        Fornitore inserito correttamente</span><br>
        <a class="btn">Procedi con l'inserimento delle <b>altre posizioni</b>.</a>
    </div>
@endif

@if (session('successPosition'))
<div class="container" style="margin-top: 70px; padding: 20px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
    <span><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
        Posizione inserita</span>
    </div>
@endif
       
@if (session('supplierUpdated'))
<div class="container" style="margin-top: 70px; padding: 20px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
    <p id="validationAlert" style="padding: 10px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
        Fornitore modificato ed aggiornato.
    </p>
</div>
@endif


<div class="container">
    <div class="row">
        <div class="col-sm">
            <h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16"><path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/></svg>
                Modifica fornitore
            </h5><br>
            <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
                @csrf
                @method('PUT')
                Fornitore<br>
                <input type="text" id="fornitore" name="fornitore" value="{{ $supplier->ragione_sociale }}"><br>
                Ditta<br>
                <input type="text" id="ditta" name="ditta" value="{{ $supplier->ditta }}"><br>
                Ragione sociale<br>
                <input type="text" id="rag_sociale" value="{{ $supplier->ragione_sociale }}" name="rag_sociale"><br>
                Indirizzo<br>
                <input type="text" id="indirizzo" value="{{ $supplier->indirizzo }}" name="indirizzo"><br>
                Città<br>
                <input type="text" id="citta" value="{{ $supplier->citta }}" name="citta"><br>
                Provincia<br>
                <input type="text" id="provincia" value="{{ $supplier->provincia }}" name="provincia"><br>
                CAP<br>
                <input type="text" id="cap" value="{{ $supplier->cap }}" name="cap"><br>
                Telefono<br>
                <input type="text" id="telefono" value="{{ $supplier->telefono }}" name="telefono"><br>
                Fax<br>
                <input type="text" id="fax" value="{{ $supplier->fax }}" name="fax"><br>
                PEC<br>
                <input type="text" id="pec" value="{{ $supplier->pec }}"name="pec"><br>
                Direzione<br>
                <input type="text" id="direzione" value="{{ $supplier->direzione }}" name="direzione"><br>
                Telefono direzione<br>
                <input type="text" id="tel_direzione" value="{{ $supplier->telefono_direzione }}" name="tel_direzione"><br>
                Mail direzione<br>
                <input type="text" id="direzione_mail" value="{{ $supplier->mail_direzione }}" name="direzione_mail"><br>
                Commerciale<br>
                <input type="text" id="commerciale" value="{{ $supplier->commerciale }}" name="commerciale"><br>
                Telefono commerciale<br>
                <input type="text" id="tel_commerciale" value="{{ $supplier->telefono_commerciale }}" name="tel_commerciale"><br>
                Mail commerciale<br>
                <input type="text" id="mail_commerciale" value="{{ $supplier->mail_commerciale }}" name="mail_commerciale"><br>
                Amministrazione<br>
                <input type="text" id="amministrazione" value="{{ $supplier->amministrazione }}" name="amministrazione"><br>
                Telefono amministrazione<br>
                <input type="text" id="tel_amministrazione" value="{{ $supplier->telefono_amministrazione }}" name="tel_amministrazione"><br>
                Email amministrazione<br>
                <input type="text" id="mail_amministrazione" value="{{ $supplier->mail_amministrazione }}" name="mail_amministrazione"><br>
                Agente<br>
                <select name="agente" id="agente">
                    <option selected>Seleziona un agente</option>
                    <option value="A" @if($supplier->agente == "A") selected @endif>A</option>
                    <option value="B" @if($supplier->agente == "B") selected @endif>B</option>
                    <option value="A|B" @if($supplier->agente == "A|B") selected @endif>A|B</option>
                </select><br>                    
                SDI<br>
                <input type="text" id="sdi" name="sdi" value="{{ $supplier->sdi }}"><br>
                IBAN<br>
                <input type="text" id="iban" name="iban" value="{{ $supplier->iban }}"><br>
                Partita IVA<br>
                <input type="text" id="partita_iva" name="partita_iva" value="{{ $supplier->partita_iva }}"><br>
                Condizioni di vendita <br>
                <input type="text" id="condizioni_vendita" name="condizioni_vendita" value="{{ $supplier->condizioni_di_vendita }}"><br>
                Costi di trasporto <br>
                <input type="text" id="costi_trasporto" name="costi_trasporto" value="{{ $supplier->costi_di_trasporto }}"><br>
                Minimo d'ordine <br>
                <input type="text" id="minimo_ordine" name="minimo_ordine" value="{{ $supplier->minimo_dordine }}"><br>
                Pagamenti <br>
                <input type="text" id="pagamenti" name="pagamenti" value="{{ $supplier->pagamenti }}"><br>
                Note<br>
                <textarea rows="6" id="note" name="note">{{ $supplier->note }}</textarea><br> {{-- Lasciare la textarea tutta su un rigo --}}
                <button type="submit" class="btn btn" style="margin-right: 10px; width: fit-content;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16"><path d="M11 2H9v3h2z"/><path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/></svg>
                    Salva
                </a><br>
                <button class="btn btn "style="margin-left: 10px; width: fit-content;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/><path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/></svg>
                    Reset campi
                </button>
            </form>
        </div>
        <div class="col-sm">
            <h5>Altre posizioni</h5><br>
                <button onclick="showAddPositionForm()" class="btn btn" id="addPositionBtn" style="width: fit-content;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16"><path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/><path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/></svg>
                    Aggiungi posizione
                </button>
                @if (count($positions) > 0)
                <button onclick="showAddPositionForm()" class="btn btn" id="deleteAllPositions" style="width: fit-content; float: right;">Elimina tutte le posizioni</button>
                @endif

            <form action="{{ route('positions.store') }}" method="POST" id="newPosition" style="display: none; background-color: #f3f3f3; border-radius: 5px; padding: 10px;">
                @csrf
                <span>
                    <h5 style="float: left;">Nuova posizione</h5> 
                    <button type="button" onclick="closeAddPositionForm()" style="float: right;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/></svg>
                        <!-- Chiudi -->
                    </button>
                </span><br>
                <input type="hidden" name="idFornitore" value="{{ $supplier->id }}">
                <label for="position" style="margin-top: 10px;">Posizione:</label>
                <input type="text" id="posizioneFornitore" name="posizioneFornitore"><br>
                <label for="position" style="margin-top: 10px;">Telefono:</label>
                <input type="text" id="telefonoPosizioneFornitore" name="telefonoPosizioneFornitore"><br>
                <label for="position" style="margin-top: 10px;">mail:</label>
                <input type="text" id="mailPosizioneFornitore" name="mailPosizioneFornitore"><br>
                <button type="submit" style="margin-top: 10px;">Invia</button>
            </form>

            

            @foreach ($positions as $position)

            <div class="modal fade" id="positionModal{{ $position->id }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="color: black; background-color: #ffc107;">
                            <h1 class="modal-title fs-5" id="positionModalLabel">⚠ Attenzione</h1>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body" style="font-weight: bold;">
                            Sei sicuro di voler eliminare la posizione "{{ $position->altra_posizione }}" ?<br>
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('positions.destroy', $position->id )}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn">Elimina</button>
                                <button type="button" class="btn btn" data-bs-dismiss="modal">Annulla</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row" style="margin-top: 10px;">
                <div class="col-sm" style="text-align: left;">
                    <span style="float: left;">
                        <strong>
                            {{ $position->altra_posizione }}
                        </strong><br>
                        {{ $position->telefono }}<br>
                        {{ $position->mail }}<br>
                    </span>
                
                    <span style="float: right;">
                        <a class="btn btn-light" href="{{ route('positions.edit', $position->id) }}" style="width: fit-content;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"><path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/></svg>
                        </a>
                        <button style="width: fit-content; height: 38.21px;" data-bs-toggle="modal" data-bs-target="#positionModal{{ $position->id }}">
                                <!-- SVG per elimina -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/><path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/></svg>
                        </button>
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    function showAddPositionForm(){

        // Form in vista
        document.getElementById('newPosition').style.display = 'block';

        // Temporanea chiusura bottone "Aggiungi posizione"
        document.getElementById('addPositionBtn').style.display = 'none';

        // // Leggero scroll in basso
        // window.scrollBy({
        //     top: 450, // numero di pixel da scorrere verso il basso
        //     left: 0,
        //     behavior: 'smooth' // per uno scroll fluido
        // });
    }

    function closeAddPositionForm(){

        // Chiusura form
        document.getElementById('newPosition').style.display = 'none';

        // Bottone "Aggiungi posizione" in vista
        document.getElementById('addPositionBtn').style.display = 'block';
    }
</script>
@include('partials.bottom')

