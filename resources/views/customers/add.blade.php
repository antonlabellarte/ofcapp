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

        <!-- Lista clienti -->
        
        <div class="container" style="margin-top: 70px;">
            <h5>Nuovo ordine</h5><br>
            
            <hr>
            <div class="row">
                Cliente
                <input type="text">
                Ragione sociale
                <input type="text">
                Cod.fiscale
                <input type="text">
                Indirizzo
                <input type="text">
                Città
                <input type="text">
                Provincia
                <input type="text">
                CAP
                <input type="text">
                Regione
                <select name="region" id="region">
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
                </select>
                
                Telefono
                <input type="text">
                Sito
                <input type="text">
                Chiusura
                <input type="text">
                Categoria
                <select name="category" id="category">
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
                </select>                
                PEC
                <input type="text">
                Agente
                <select name="agent" id="agent">
                    <option selected>Seleziona un agente</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="A|B">A|B</option>
                </select>
                SDI
                <input type="text">
                Iban
                <input type="text">
                Partita IVA
                <input type="text">
                Responsabile scarico
                <input type="text">
                Indirizzo scarico
                <input type="text">
                Città scarico
                <input type="text">
                Tel. responsabile scarico
                <input type="text">
                Note
                <textarea rows="6"></textarea><br>
                <button class="bottomBtns" style="margin-top: 10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16"><path d="M11 2H9v3h2z"/><path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/></svg>
                    Salva
                </button><br>
                <button class="bottomBtns "style="margin-top: 10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/><path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/></svg>
                    Reset campi
                </button>
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

