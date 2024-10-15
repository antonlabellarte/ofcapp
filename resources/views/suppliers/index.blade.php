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
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/orders/style.css') }}">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
    @include('partials.navbar')

        <!-- Filtraggio -->
        <div class="container" style="padding-bottom: 10px;">
            <form>
                <p style="width: 100%; margin-top: 10px;">
                    <span style="float: left;">Fornitore</span>
                    <span style="float: right;">
                        <a href="{{ route('suppliers.index') }}"class="btn btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/><path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/></svg>
                            Reset filtri
                        </a>
                    </span>
                </p><br>

                <input type="text" id="findsupplier" placeholder="Cerca Cliente 🔍"><br>

                <button type="submit" style="width: 150px; margin-top: 20px;">
                    Cerca
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg>
                </button>
            </form>
        </div>

        <!-- Lista ordini -->

        @if (count($suppliers) > 0)
        <div class="container" style="margin-top: 40px;">
            <h5>Lista Clienti</h5><br>
            <a href="{{ route('suppliers.create') }}"class="btn btn" style="width: 170px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16"><path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/><path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/></svg>
                Aggiungi Fornitore
            </a>
            <hr>
            @foreach ($suppliers as $supplier)
            
            <!-- Modal -->
            <div class="modal fade" id="supplierModal{{ $supplier->id }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="supplierModalLabel">⚠ Attenzione</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="font-weight: bold;">
                            Sei sicuro di voler eliminare il fornitore "{{ $supplier->ditta }}" ?
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('suppliers.destroy', $supplier->id )}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn">Elimina</button>
                                <button type="button" class="btn btn" data-bs-dismiss="modal">Annulla</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                <span style="background-color: #172A46; color: white; border-radius: 5px; padding: 5px;"><strong>{{ $supplier->ditta }}</strong></span><br>
                    <strong>
                        Telefono:
                    </strong> 
                    {{ $supplier->telefono }}<br> 
                    <strong>
                        Mail:
                    </strong>
                    {{ $supplier->pec }}
                </div>
                <div class="col-sm d-flex justify-content-end">
                    <span style="text-align: right;">
                        <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn" style="margin-bottom: 5px; width: 80px;">
                            <!-- SVG per modifica -->
                            Modifica
                        </a><br>
                        <button class="btn btn" style="margin-bottom: 5px; width: 80px;" data-bs-toggle="modal" data-bs-target="#supplierModal{{ $supplier->id }}">
                            <!-- SVG per elimina -->
                            Elimina
                        </button>
                    </span>
                </div>
            </div>
        @endforeach
            <hr>
        </div>
        @else
        <div class="container" style="margin-top: 40px; padding: 10px;">
            <strong>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#d9534f" class="bi bi-database-fill-x" viewBox="0 0 16 16"><path d="M8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1"/><path d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12 12 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7m6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.55 4.55 0 0 1 .23-2.002m-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.5 4.5 0 0 1-1.3-1.905"/><path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708"/></svg>
                Nessun Clientes presente
            </strong>
        </div>
        @endif

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>