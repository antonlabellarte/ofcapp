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
            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16"><path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/></svg></p>
            <h5>Nuovo Ordine</h5>
            <div class="row">
                <div class="col">
                    <small>Data ordine</small><br>
                    <input type="date" />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <small>Cliente</small><br>
                    <select name="cars" id="cars">
                        <option disabled selected value> </option>
                        <option value="placeHolder">Cliente</option>
                        <option value="placeHolder">Cliente2</option>
                        <option value="placeHolder">Cliente3</option>
                        <option value="placeHolder">Cliente4</option>
                    </select>
                </div>
                <div class="col">
                    <small>Fornitore</small><br>
                    <div class="custom-select">
                        <select name="cars" id="cars">
                            <option disabled selected value> </option>
                            <option value="placeholder"><span id="opzione">Fornitore</span></option>
                            <option value="placeHolder">Fornitore2</option>
                            <option value="placeHolder">Fornitore3</option>
                            <option value="placeHolder">Fornitore4</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <small>Referente per scarico</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Indirizzo scarico</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Città scarico</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Tel.Resp.le Scarico</small><br>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <small>AG</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Quantità</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Importo</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Pagamento</small><br>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <small>Sconto</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Mese ordine</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Descrizione</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>1° Sconto</small><br>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <small>2° Sconto</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>3° Sconto</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Oneri vari</small><br>
                    <input type="text">
                </div>
                <div class="col">
                    <small>Note</small><br>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <small>Data di consegna</small><br>
                    <input type="date" />
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