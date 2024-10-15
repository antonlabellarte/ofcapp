<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Font CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/font/style.css') }}">
        <!-- Relative CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/orders/add/style.css') }}">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
    @include('partials.navbar')
    
    @if (session('success'))
    <div class="container" style="margin-top: 70px; padding: 20px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
        <span><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
            Cliente inserito correttamente</span>
        </div>
    @endif

        <!-- Lista clienti -->
        
        <div class="container" style="margin-top: 70px;">                
            <h5>Modifica cliente ID: {{ $customer->id }}</h5><br>
            @if (session('customerUpdated'))
            <p id="validationAlert" style="padding: 10px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
                Cliente modificato ed aggiornato.
            </p>
            @endif
            <h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/></svg>
                Nuovo Cliente
            </h5>
            <br>
            
            <hr>
            <div class="row">
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
                    <textarea rows="6" id="note" name="note">{{ $customer->note }}</textarea><br>
                    <button type="submit" class="btn btn" style="margin-top: 10px; width: 100%;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16"><path d="M11 2H9v3h2z"/><path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/></svg>
                        Salva
                    </a><br>
                    <button class="btn btn "style="margin-top: 10px; width: 100%;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/><path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/></svg>
                        Reset campi
                    </button>
                </form>
            </div>
            <hr>
        </div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>

