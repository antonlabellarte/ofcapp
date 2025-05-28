@include('partials.top')
@include('partials.navbar')

<!-- Filtraggio -->
<div class="container" style="padding-bottom: 10px;">
    <form action="{{ route('orders.filter') }}" method="GET">
        <p style="width: 100%; margin-top: 10px;">
            <span style="float: left;">Data ordine</span>
            <span style="float: right;">
                <a href="{{ route('orders.index') }}"class="btn btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/><path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/></svg>
                    Reset filtri
                </a>
            </span>
        </p><br>
        
            
        <input type="date" name="data" style="margin-top: 20px;"><br>
        Cliente<br>
        <select name="customers" id="customers">
            @foreach ($customers as $customer)
            <option value="{{ $customer->ragione_sociale }}">{{ $customer->ragione_sociale }}</option><br>
            @endforeach
        </select><br>

        Fornitore <br>
        <select name="suppliers" id="suppliers">
            @foreach ($suppliers as $supplier)
            <option value="{{ $supplier->ditta }}">{{ $supplier->ditta }}</option>
            @endforeach
        </select><br>

        <button type="submit" style="width: 150px; margin-top: 10px;">
            Cerca
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg>
        </button>
    </form>
</div>

<!-- Lista ordini -->
@if (session('orderDeleted'))
    <div class="container success" style="margin-top: 40px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
        Ordine eliminato.
    </div>
@endif

@if (count($orders) > 0)
<div class="container" style="margin-top: 40px;">
    <h5>Lista ordini</h5><br>
    <a href="{{ route('orders.create') }}"class="btn btn" style="width: 170px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16"><path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/><path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/></svg>
        Aggiungi ordine
    </a>
    <hr>
    @foreach ($orders as $order)

    <!-- Modal -->
    <div class="modal fade" id="orderModal{{ $order->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">⚠ Attenzione</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="font-weight: bold;">
                Sei sicuro di voler eliminare l'ordine?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('orders.destroy', $order->id )}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="modalConfirmBtn">Elimina</button>
                        <button type="button" class="modalDeleteBtn" data-bs-dismiss="modal">Annulla</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <span style="float: left;">
                <strong style="background-color: #172A46; color: white; border-radius: 5px; padding: 5px;">Data: {{ \Carbon\Carbon::parse($order->data)->format('d/m/Y') }}</strong><br>
                <strong>Cliente</strong>: {{ \App\Models\Customers::find($order->id_cliente)->ragione_sociale }} <br> 
                <strong>Fornitore</strong>: {{ \App\Models\Suppliers::find($order->id_fornitore)->ditta }}
            </span>
            <span style="float: right;">
                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn" style="margin-bottom: 5px; width: 40px;">
                    {{-- Modifica --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"><path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/></svg>
                </a>
                <button class="btn btn" style="margin-bottom: 5px; width: 40px;" data-bs-toggle="modal" data-bs-target="#orderModal{{ $order->id }}">
                    {{-- Elimina --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16"><path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/></svg>
                </button><br>
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
        Nessun ordine presente<br>
        <a href="{{ route('orders.create') }}"class="btn btn" style="width: 170px; margin-top: 10px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16"><path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/><path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/></svg>
            Aggiungi ordine
        </a>
    </strong>
</div>
@endif
@include('partials.bottom')