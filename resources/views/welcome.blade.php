@include('partials.top')
@include('partials.navbarhome')

<div class="container">
    <div class="row" style="background-color: transparent; border: none;" id="desktopMenu">
        <div class="col-sm">
            <div class="card" style="border: none;" id="cardOrder">
                <div class="card-body">
                    <h5 class="card-title">Ordini</h5>
                </div>
                <a class="card-footer" href="{{ route('orders.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/></svg>
                    VAI
                </a>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="border: none;" id="cardCustomer">            
                <div class="card-body">
                    <h5 class="card-title">Clienti</h5>
                </div>
                <a class="card-footer" href="{{ route('customers.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/></svg>
                    VAI
                </a>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="border: none;" id="cardSupplier">            
                <div class="card-body">
                    <h5 class="card-title">Fornitori</h5>
                </div>
                <a class="card-footer" href="{{ route('suppliers.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/></svg>
                    VAI
                </a>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="border: none;" id="cardVisit">            
                <div class="card-body">
                    <h5 class="card-title">Agenti e visite</h5>
                </div>
                <a class="card-footer" href="{{ route('visits.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/></svg>
                    VAI
                </a>
            </div>
        </div>
    </div>

    <div class="row" style="background-color: transparent; border: none;" id="mobileMenu">
        <div class="d-grid gap-2">
            <a href="{{ route('orders.index') }}" class="btn" style="background-image: url('https://www.shipbob.com/wp-content/uploads/2019/01/iStock-692898468-2-optimized.webp'); color: white;">
                <span style="float: left;">Ordini</span>
                <span style="float: right;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/></svg>
                </span>
            </a>
            <a href="{{ route('customers.index') }}" class="btn" style="background-image: url('https://www-business.media.uconn.edu/wp-content/uploads/sites/969/2019/02/2019-02-27-supplier-optimization.jpg'); color: black;">
                <span style="float: left;">Clienti</span>
                <span style="float: right;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/></svg>
                </span>
            </a>
            <a href="{{ route('suppliers.index') }}" class="btn" style="background-image: url('https://images.pexels.com/photos/95425/pexels-photo-95425.jpeg?cs=srgb&dl=pexels-erikscheel-95425.jpg&fm=jpg'); color: white;">
                <span style="float: left;">Fornitori</span>
                <span style="float: right;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/></svg>
                </span>
            </a>
            <a href="{{ route('visits.index') }}" class="btn" style="background-image: url('https://img.freepik.com/free-photo/magnifying-glass-black-frame-wooden-background_185193-163542.jpg'); color: white;">
                <span style="float: left;">Agenti e visite</span>
                <span style="float: right;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/></svg>
                </span>
            </a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm">trait_exists</div>
        <div class="col-sm">tweqw</div>
    </div>
</div>

<style>

#mobileMenu {
    display: none;
}

a {
    margin-top: 10px;
}

@media (max-width: 768px) and (orientation: portrait) {
  /* Le tue regole CSS per mobile in modalità ritratto vanno qui */
  #mobileMenu {
    display: block;
  }

  #desktopMenu {
    display: none;
  }
}

</style>
@include('partials.bottom')