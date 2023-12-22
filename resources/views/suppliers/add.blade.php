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
            <p><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16"><path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/></svg></p>
            <h5>Nuovo Fornitore</h5>
            <div class="row">
                <div class="col">
                    <small>Codice Fornitore</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Ditta</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Direzione</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Cellulare</small><br>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <small>DirezioneMail</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Commerciale</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Email commerciale</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Amministrazione</small><br>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <small>Email amministrazione</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Altre posizioni</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Altre email</small><br>
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
                    <small>Indirizzo</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Città</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>PR</small><br>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <small>IBAN</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>AG</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>PEC</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>SDI</small><br>
                    <input type="text">
                </div>
            </div>
            <div class="row">
            <div class="col">
                    <small>Partita Iva</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Pagamenti</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>CAP</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Note</small><br>
                    <input type="text">
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