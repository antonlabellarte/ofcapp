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

    <small class="mobileOnly" style="margin-top: 55px; margin-bottom: -100px; color: #856404; background-color: #fff3cd; border-color: #ffeeba;">Ti consigliamo di usare la modifica da un PC per un esperienza ottimale</small><br>
    
    <div class="container mt5" style="margin-bottom: -50px;">
        <a href="{{ route('suppliers') }}" class="btn" style="width: 250px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/></svg> Torna indietro</a>
    </div>

    <div class="container mt5" id="ifContainerBorder">
        <!-- <div class="card" style="width: 18rem; padding: 10px;"> -->
            <p style="margin-top: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16"><path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/></svg></p>
            <h5 style="padding: 10px; color: white; background-color: #172a46; border-radius: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/></svg> Modifica dati di: <br><b>{{ $supplier->ditta }}</b></h5>
            <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <small>Codice Fornitore</small><br>
                        <input type="text" name="codice_fornitore" value="{{ $supplier->codice_fornitore }}">
                    </div>
                    <div class="col">
                        <small>Ditta</small><br>
                        <input type="text" name="ditta" value="{{ $supplier->ditta }}">
                    </div>
                    <div class="col">
                        <small>Direzione</small><br>
                        <input type="text" name="direzione">
                    </div>
                    <div class="col">
                        <small>Cellulare</small><br>
                        <input type="text" name="cellulare">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <small>DirezioneMail</small><br>
                        <input type="text" name="direzione_mail">
                    </div>
                    <div class="col">
                        <small>Commerciale</small><br>
                        <input type="text" name="commerciale">
                    </div>
                    <div class="col">
                        <small>Email commerciale</small><br>
                        <input type="text" name="email_commerciale">
                    </div>
                    <div class="col">
                        <small>Amministrazione</small><br>
                        <input type="text" name="amministrazione">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <small>Email amministrazione</small><br>
                        <input type="text" name="email_amministrazione">
                    </div>
                    <div class="col">
                        <small>Altre posizioni</small><br>
                        <input type="text" name="altre_posizioni">
                    </div>
                    <div class="col">
                        <small>Altre email</small><br>
                        <input type="text" name="altre_email">
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
                        <small>Indirizzo</small><br>
                        <input type="text" name="indirizzo">
                    </div>
                    <div class="col">
                        <small>Città</small><br>
                        <input type="text" name="citta">
                    </div>
                    <div class="col">
                        <small>PR</small><br>
                        <input type="text" name="pr">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <small>IBAN</small><br>
                        <input type="text" name="iban">
                    </div>
                    <div class="col">
                        <small>AG</small><br>
                        <input type="text" name="ag">
                    </div>
                    <div class="col">
                        <small>PEC</small><br>
                        <input type="text" name="pec">
                    </div>
                    <div class="col">
                        <small>SDI</small><br>
                        <input type="text" name="sdi">
                    </div>
                </div>
                <div class="row">
                <div class="col">
                        <small>Partita Iva</small><br>
                        <input type="text" name="partita_iva">
                    </div>
                    <div class="col">
                        <small>Pagamenti</small><br>
                        <input type="text" name="pagamenti">
                    </div>
                    <div class="col">
                        <small>CAP</small><br>
                        <input type="text" name="cap">
                    </div>
                    <div class="col">
                        <small>Note</small><br>
                        <input type="text" name="note">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button id="confirmBtn" style="width: 300px; margin-bottom: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/></svg><br>Salva</button>
                    </div>
                    <div class="col">
                        <button id="resetBtn" style="width: 300px; margin-bottom: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/><path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/></svg><br>Reset</button>
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
  </body>
</html>