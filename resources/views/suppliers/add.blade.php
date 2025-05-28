@include('partials.top')
@include('partials.navbar')
    
@if (session('success'))
<div class="container" style="margin-top: 70px; padding: 20px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
    <span><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
        Fornitore inserito correttamente</span><br>
        <a class="btn" style="width: fit-content">Procedi con l'inserimento delle <b>altre posizioni</b></a><br>
        <a class="btn" href="{{ route('suppliers.index') }}" style="width: fit-content">Torna alla lista dei fornitori</a>
    </div>
@endif
       
<div class="container" style="margin-top: 70px;">                
    <h5>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16"><path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/></svg>
        Nuovo Fornitore
    </h5>
    <br>
    
    <hr>
    <div class="row">
        <form action="{{ route('suppliers.store') }}" method="POST">
            @csrf
            Fornitore<br>
            <input type="text" id="cliente" name="cliente"><br>
            Ditta<br>
            <input type="text" id="ditta" name="ditta"><br>
            Ragione sociale<br>
            <input type="text" id="rag_sociale" name="rag_sociale"><br>
            Indirizzo<br>
            <input type="text" id="indirizzo" name="indirizzo"><br>
            Città<br>
            <input type="text" id="citta" name="citta"><br>
            Provincia<br>
            <input type="text" id="provincia" name="provincia"><br>
            CAP<br>
            <input type="text" id="cap" name="cap"><br>
            Telefono<br>
            <input type="text" id="telefono" name="telefono"><br>
            Fax<br>
            <input type="text" id="fax" name="fax"><br>
            PEC<br>
            <input type="text" id="pec" name="pec"><br>
            Direzione<br>
            <input type="text" id="direzione" name="direzione"><br>
            Telefono direzione<br>
            <input type="text" id="tel_direzione" name="tel_direzione"><br>
            Telefono direzione<br>
            <input type="text" id="direzione_mail" name="direzione_mail"><br>
            Commerciale<br>
            <input type="text" id="commerciale" name="commerciale"><br>
            Telefono commerciale<br>
            <input type="text" id="tel_commerciale" name="tel_commerciale"><br>
            Mail commerciale<br>
            <input type="text" id="tel_commerciale" name="mail_commerciale"><br>
            Amministrazione<br>
            <input type="text" id="amministrazione" name="amministrazione"><br>
            Telefono amministrazione<br>
            <input type="text" id="tel_amministrazione" name="tel_amministrazione"><br>
            Email amministrazione<br>
            <input type="text" id="mail_amministrazione" name="mail_amministrazione"><br>
            Agente<br>
            <select name="agente" id="agente">
                <option selected>Seleziona un agente</option>
                <option value="E">E</option>
                <option value="L">L</option>
                <option value="E|L">E|L</option>
            </select><br>                    
            SDI<br>
            <input type="text" id="sdi" name="sdi"><br>
            IBAN<br>
            <input type="text" id="iban" name="iban"><br>
            Partita IVA<br>
            <input type="text" id="partita_iva" name="partita_iva"><br>
            Costi di trasporto <br>
            <input type="text" id="costi_trasporto" name="costi_trasporto"><br>
            Condizioni di vendita <br>
            <input type="text" id="condizioni_vendita" name="condizioni_vendita"><br>
            Minimo d'ordine <br>
            <input type="text" id="minimo_ordine" name="minimo_ordine"><br>
            Pagamenti <br>
            <input type="text" id="pagamenti" name="pagamenti"><br>
            Note<br>
            <textarea rows="6" id="note" name="note"></textarea><br>
            <button type="submit" class="btn btn" style="margin-top: 10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16"><path d="M11 2H9v3h2z"/><path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/></svg>
                Salva
            </a>
        </form>
    </div>
    <hr>
</div>
@include('partials.bottom')

