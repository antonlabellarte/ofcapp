<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
    <title>OFC App</title>
  </head>
  <body>
    @include('partials.navbar')

    <small class="mobileOnly" style="margin-top: 55px; margin-bottom: -100px; color: #856404; background-color: #fff3cd; border-color: #ffeeba;">Ti consigliamo di usare l'immissione da un PC per un esperienza ottimale</small><br>

    <div class="text-center" style="margin-top: 100px;">
        <a href="{{ route('customers') }}" style="width: 250px;" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/></svg> Torna indietro</a>
    </div>

    <div class="container mt5" id="ifContainerBorder">
        <!-- <div class="card" style="width: 18rem; padding: 10px;"> -->
            <p><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16"><path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/></svg></p>
            <h5 style="padding: 10px; color: white; background-color: #172a46; border-radius: 10px;">Nuovo cliente</h5>
            <form action="{{ route('customers.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <small>Nome cliente</small><br>
                        <input type="text" name="nome_cliente">
                    </div>
                    <div class="col">
                        <small>Partita IVA</small><br>
                        <input type="text" name="partita_iva">
                    </div>
                    <div class="col">
                        <small>Codice fiscale</small><br>
                        <input type="text" name="codice_fiscale">
                    </div>
                    <div class="col">
                        <small>Telefono</small><br>
                        <input type="text" name="telefono">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <small>FAX</small><br>
                        <input type="text" name="fax">
                    </div>
                    <div class="col">
                        <small>Cellulare</small><br>
                        <input type="text" name="cellulare">
                    </div>
                    <div class="col">
                        <small>Città</small><br>
                        <input type="text" name="citta">
                    </div>
                    <div class="col">
                        <small>Indirizzo</small><br>
                        <input type="text" name="indirizzo">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <small>Indirizzo e-mail</small><br>
                        <input type="text" name="indirizzo_email">
                    </div>
                    <div class="col">
                        <small>CAP</small><br>
                        <input type="text" name="cap">
                    </div>
                    <div class="col">
                        <small>PR</small><br>
                        <input type="text" name="pr">
                    </div>
                    <div class="col">
                        <small>IBAN</small><br>
                        <input type="text" name="iban">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <small>Chiusura</small><br>
                        <input type="text" name="chiusura">
                    </div>
                    <div class="col">
                        <small>PEC</small><br>
                        <input type="text" name="pec">
                    </div>
                    <div class="col">
                        <small>Sito web</small><br>
                        <input type="text" name="sito_web">
                    </div>
                    <div class="col">
                        <small>AG</small><br>
                        <input type="text" name="ag">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <small>Zona</small><br>
                        <input type="text" name="zona">
                    </div>
                    <div class="col">
                        <small>Categoria cliente</small><br>
                        <input type="text" name="categoria_cliente">
                    </div>
                    <div class="col">
                        <small>SDI</small><br>
                        <input type="text" name="sdi">
                    </div>
                    <div class="col">
                        <small>Ragione sociale</small><br>
                        <input type="text" name="ragione_sociale">
                    </div>
                </div>
                <div class="row">
                <div class="col">
                        <small>Codice Cliente</small><br>
                        <input type="text" name="codice_cliente">
                    </div>
                    <div class="col">
                        <small>Responsabile</small><br>
                        <input type="text" name="responsabile">
                    </div>
                    <div class="col">
                        <small>Note</small><br>
                        <input type="text" name="note" style="width: 444px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button style="width: 150px; margin-bottom: 10px;" type="submit" id="confirmBtn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/></svg> Salva</button>
                    </div>
                    <div class="col">
                        <button style="width: 150px; margin-bottom: 10px;" id="resetBtn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/><path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/></svg> Reset</button>
                    </div>
                </div>
            </form>
        <!-- </div> -->
    </div>
    <button class="mobileOnly" id="backToTop" style="width: 100px;" onclick="tornaSu()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/></svg> Torna su</button>

    @include('partials.footer')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="{{ asset('js/script.js') }}"></script>

    <style>
        input:hover, .container:hover, select:hover, button:hover {
            box-shadow: 0 0 11px rgba(33,33,33,.2);
        }
    </style>
  </body>
</html>