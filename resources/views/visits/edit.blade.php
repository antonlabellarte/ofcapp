@include('partials.top')
@include('partials.navbar')
    
@if (session('success'))
<div class="container" style="margin-top: 70px; padding: 20px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
    <span><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
        Visita modificata e aggiornata</span><br>
    </div>
@endif
       
<div class="container" style="margin-top: 70px;">                
    <h5>
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/></svg>
        Modifica visita #{{ $visit->id }}
    </h5>
    <br>
    
    <hr>
    <div class="row">
        <form action="{{ route('visits.update', $visit->id) }}" method="POST">
            @csrf
            @method('PUT')
            Agente<br>
            <select name="agente" id="agente">
                <option selected>{{ $visit->agente }}</option>
                <option value="E">E</option>
                <option value="L">L</option>
                <option value="E|L">E|L</option>
            </select><br>
            Cliente<br>
            <select name="cliente" id="cliente">
                <option value="{{ $visit->cliente }}" selected>{{ $visit->cliente }}</option>
                @foreach ($customers as $customer)
                    <option value="{{ $customer->ragione_sociale }}">{{ $customer->ragione_sociale }}</option>
                @endforeach
            </select><br>
            Data<br>
            <input type="date" id="data" name="data" value="{{ $visit->ultima_visita }}"><br>
            Attivita<br>
            <input type="text" id="attivita" name="attivita" value="{{ $visit->attivita }}"><br>
            Aggiornamenti<br>
            <input type="text" id="aggiornamenti" name="aggiornamenti" value="{{ $visit->aggiornamenti }}"><br>
            Note<br>
            <textarea rows="6" id="note" name="note">{{ $visit->note }}</textarea><br>
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
@include('partials.bottom')