@include('partials.top')
@include('partials.navbar')

{{-- Se un Cliente viene inserito correttamente, compare un messaggio di successo --}}
@if (session('success'))
<div class="container" style="margin-top: 70px; padding: 20px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
    <span><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
        Cliente inserito correttamente</span>
    </div>
@endif

<!-- Lista clienti -->        
<div class="container" style="margin-top: 70px;">                
    <h5>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/></svg>
        Nuovo Cliente
    </h5>
    <br>
    
    <hr>
    <div class="row">
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            Cliente<br>
            <input type="text" id="cliente" name="cliente"><br>
            Ragione sociale<br>
            <input type="text" id="ragione_sociale" name="ragione_sociale"><br>
            Cod.fiscale<br>
            <input type="text" id="codfiscale" name="codfiscale"><br>
            Indirizzo<br>
            <input type="text" id="indirizzo" name="indirizzo"><br>
            Città<br>
            <input type="text" id="citta" name="citta"><br>
            Provincia<br>
            <input type="text" id="provincia" name="provincia"><br>
            CAP<br>
            <input type="text" id="cap" name="cap"><br>
            Regione<br>
            <select name="regione" id="regione">
                <option selected>Seleziona una regione</option>
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
            <input type="text" id="telefono" name="telefono"><br>
            Sito<br>
            <input type="text" id="sito" name="sito"><br>
            Chiusura<br>
            <input type="text" id="chiusura" name="chiusura"><br>
            Categoria<br>
            <select name="categoria" id="categoria">
                <option selected>Seleziona una categoria</option>
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
            <input type="text" id="pec" name="pec"><br>
            Agente<br>
            <select name="agente" id="agente">
                <option selected>Seleziona un agente</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="A|B">A|B</option>
            </select><br>
            SDI<br>
            <input type="text" id="sdi" name="sdi"><br>
            Iban<br>
            <input type="text" id="iban" name="iban"><br>
            Partita IVA<br>
            <input type="text" id="partitaiva" name="partitaiva"><br>
            Responsabile scarico<br>
            <input type="text" id="responsabilescarico" name="responsabilescarico"><br>
            Indirizzo scarico<br>
            <input type="text" id="indirizzoscarico" name="indirizzoscarico"><br>
            Città scarico<br>
            <input type="text" id="cittascarico" name="cittascarico"><br>
            Tel. responsabile scarico<br>
            <input type="text" id="telresponsabilescarico" name="telresponsabilescarico"><br>
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