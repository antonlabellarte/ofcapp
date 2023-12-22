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

    <div class="container mt5" id="ifContainerBorder">
        <!-- <div class="card" style="width: 18rem; padding: 10px;"> -->
            <p><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16"><path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/></svg></p>
            <h5>Nuovo Cliente</h5>
            <div class="row">
                <div class="col">
                    <small>Nome Cliente</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Partita Iva</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Codice Fiscale</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Telefono</small><br>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <small>FAX</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Cellulare</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Città</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Indirizzo</small><br>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <small>Indirizzo e-mail</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>CAP</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>PR</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>IBAN</small><br>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <small>Chiusura</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>PEC</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Sito Web</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>AG</small><br>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <small>Zona</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Categoria Cliente</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>SDI</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Ragione sociale</small><br>
                    <input type="text">
                </div>
            </div>
            <div class="row">
            <div class="col">
                    <small>Codice Cliente</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Responsabile</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Note</small><br>
                    <input type="text" style="width: 444px;">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button id="confirmBtn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/></svg><br>Salva</button>
                </div>
                <div class="col">
                    <button id="resetBtn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/><path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/></svg><br>Reset</button>
                </div>
            </div>
        <!-- </div> -->
    </div>

    @include('partials.footer')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>