@include('partials.top')
@include('partials.navbar')

@if (session('success'))
<div class="container" style="margin-top: 70px; padding: 20px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
        Ordine inserito correttamente</span>
    </div>
@endif

<!-- Lista clienti -->
<div class="container" style="margin-top: 70px;">
    <h5>Nuovo ordine</h5><br>
    <p id="validationAlert" style="color: #721c24; background-color: #f8d7da; border-color: #f5c6cb; border-radius: 5px;"></p>
    <hr>
    <div class="row">
        <form action="{{ route('orders.store') }}" method="POST" onsubmit="return validateForm()">
            @csrf
            Data ordine<br>
            <input type="date" name="data" id="data"><br>
            Cliente<br>
            <select name="cliente" id="cliente">
                <option selected>Seleziona un cliente</option>
                @foreach ($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->ragione_sociale }} | <strong>Agente: {{ $customer->agente }}</strong></option>
                @endforeach
            </select><br>
            Fornitore<br>
            <select name="fornitore" id="fornitore">
                <option selected>Seleziona un fornitore</option>
                @foreach ($suppliers as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->ditta }}</option>
                @endforeach
            </select><br>
            Agente<br>
            <select name="agente" id="agente">
                <option selected>Seleziona un agente</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="A|B">A|B</option>
            </select><br>
            Descrizione<br>
            <input type="text" name="descrizione" id="descrizione"><br>
            Codice ordine<br>
            <input type="number" name="codiceOrdine" id="codiceOrdine"><br>
            Pagamento<br>
            <input type="text" name="pagamento" id="pagamento"><br>
            Oneri vari (€)<br>
            <input type="text" name="oneriVari" id="oneriVari"><br>
            Codice articolo<br>
            <input type="text" name="codiceArticolo" id="codiceArticolo"><br>
            Importo cadauno (€)<br>
            <input type="number" name="importoCadauno" id="importoCadauno" oninput="calcolaImportoTotale()"><br>
            Quantità<br>
            <input type="number" value="1" readonly name="quantita" id="quantita" oninput="calcolaImportoTotale()"><br>
            Sconto (%)<br>
            <input type="number" name="sconto" id="sconto" oninput="calcolaImportoTotale()"><br>
            Importo totale (€)<br>
            <input type="number" name="importoTotale" id="importoTotale" oninput="calcolaImportoTotale()"><br>
            Note<br>
            <textarea rows="6" name="note" id="note"></textarea><br>
            <button type="submit" class="btn btn" style="margin-top: 10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16"><path d="M11 2H9v3h2z"/><path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/></svg>
                Salva
            </button>
        </form>
    </div>
    <hr>
</div>
    
<script>
    function validateForm() {
        if (document.getElementById('data').value == "") {
            document.getElementById('validationAlert').innerHTML = "⚠ Inserisci la <strong>data</strong>"
            document.getElementById('validationAlert').style.padding = "10px"
            window.scrollTo(0, 0);
            return false;
        } else if (document.getElementById('codiceOrdine').value == "") {
            document.getElementById('validationAlert').innerHTML = "⚠ Inserisci il <strong>codice dell'ordine</strong>"
            document.getElementById('validationAlert').style.padding = "10px"
            window.scrollTo(0, 0);
            return false;
        } else if (document.getElementById('pagamento').value == "") {
            document.getElementById('validationAlert').innerHTML = "⚠ Inserisci il <strong>pagamento</strong>"
            document.getElementById('validationAlert').style.padding = "10px"
            window.scrollTo(0, 0);
            return false;
        } else if (document.getElementById('codiceArticolo').value == "") {
            document.getElementById('validationAlert').innerHTML = "⚠ Inserisci il <strong>codice articolo</strong>"
            document.getElementById('validationAlert').style.padding = "10px"
            window.scrollTo(0, 0);
            return false;
        } else if (document.getElementById('importoCadauno').value == "") {
            document.getElementById('validationAlert').innerHTML = "⚠ Inserisci l'<strong>importo cadauno</strong>"
            document.getElementById('validationAlert').style.padding = "10px"
            window.scrollTo(0, 0);
            return false;
        } else {
            return true;
        }
    }
    function calcolaImportoTotale(){
        var importoCadauno = document.getElementById('importoCadauno').value
        var quantita = document.getElementById('quantita').value
        var sconto = document.getElementById('sconto').value
        var importoTotale = importoCadauno * quantita - importoCadauno * quantita * sconto / 100
        
        document.getElementById('importoTotale').value = importoTotale
    }
</script>
@include('partials.bottom')

