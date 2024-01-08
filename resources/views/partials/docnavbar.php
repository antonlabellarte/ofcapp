<nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light fixed-top border-bottom box-shadow mb-3" style="background-color: #232323;">
      <div class="container-fluid">
      <a href="/doc" class="navbar-brand" style="color: white; text-align: center; display: inline; width: 150px; margin-right: 30px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16"><path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/><path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/></svg> OFC App Doc</a>
          <button class="navbar-toggler" style="background-color: lightgray;" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
            <br>
              <ul class="navbar-nav flex-grow-1">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropDownToggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                        Generale
                    </a>
                    <ul class="dropdown-menu" style="background-color: #232323; border: 2px solid gray;">
                        <li><a class="dropdown-item" href="#" style="color: white;">Action</a></li>
                        <li><a class="dropdown-item" href="#" style="color: white;">Another action</a></li>
                        <li><hr class="dropdown-divider" style="color: gray;"></li>
                        <li><a class="dropdown-item" href="#" style="color: white;">Else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropDownToggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                        Ordini
                    </a>
                    <ul class="dropdown-menu" style="background-color: #232323; border: 2px solid gray;">
                        <li><a class="dropdown-item" href="#" style="color: white; width: 200px;">Guida generale Ordini</a></li>
                        <li><hr class="dropdown-divider" style="color: gray;"></li>
                        <li><a class="dropdown-item" href="#" style="color: white;">Gestione <svg style="transform: scaleX(-1);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.854 14.854a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V3.5A2.5 2.5 0 0 1 6.5 1h8a.5.5 0 0 1 0 1h-8A1.5 1.5 0 0 0 5 3.5v9.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4z"/></svg></a></li>
                        <li><a class="dropdown-item" href="#" style="color: white;">• Aggiunta</a></li>
                        <li><a class="dropdown-item" href="#" style="color: white;">• Lista</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropDownToggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                        Clienti
                    </a>
                    <ul class="dropdown-menu" style="background-color: #232323; border: 2px solid gray;">
                        <li><a class="dropdown-item" href="#" style="color: white;">Action</a></li>
                        <li><a class="dropdown-item" href="#" style="color: white;">Another action</a></li>
                        <li><hr class="dropdown-divider" style="color: gray;"></li>
                        <li><a class="dropdown-item" href="#" style="color: white;">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropDownToggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                        Fornitori
                    </a>
                    <ul class="dropdown-menu" style="background-color: #232323; border: 2px solid gray;">
                        <li><a class="dropdown-item" href="#" style="color: white;">Action</a></li>
                        <li><a class="dropdown-item" href="#" style="color: white;">Another action</a></li>
                        <li><hr class="dropdown-divider" style="color: gray;"></li>
                        <li><a class="dropdown-item" href="#" style="color: white;">Else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('docdisclaimer') }}" id="navBtn" style="color: white; width: 100px;">Disclaimer</a>
                </li>
              </ul>
              <p class="navBarMobileOnly" style="color: lightgray;"><i>Developed by Antonio Labellarte</i><p>
          </div>
      </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="border: 1px solid white;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #F8F9FA;">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black; font-weight: bold;">Attenzione</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="color: black; background-color: #F8F9FA;">
                <p class="modalBodyContent">Sei sicuro di voler tornare all'applicazione OFC?</p>
            </div>
            <div class="modal-footer" style="background-color: #F8F9FA;">
                <a href="/" type="a" class="btn" style="width: 100px;">Sì</a>
                <button type="button" class="btn" style="width: 100px;" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>

<style>
.dropdown-item {
    margin-left: 10px;
    width: 130px;
}
#navBtn, .dropdown-item {
    border: 1px solid #232323;
    background-color: #232323;
    border-radius: 5px;
    padding: 5px;
    color: white;
    text-decoration: none;
}
#navBtn:hover, .dropdown-item:hover {
    border: 1px solid lightgray;
    border-radius: 5px;
    cursor: pointer;
    background-color: #232323;
    color: white;
}

a {
    width: 150px;
}

#mobileCloseOnly {
    display: none;
    color: #172a46;
    background-color: white;
    border: none;
    font-size: 12px;
    justify-content: center;
}

@media only screen and (max-width: 600px) {
    .navBarMobileOnly {
        margin-top: 30px;
        margin-bottom: -15px;
    }

    #mobileCloseOnly {
        display: block;
        margin-top: 15px;
    }
}

.modalBodyContent {
    padding: 15px;
    border-radius: 10px;
}

.btn-close {
    border: 1px solid white;
    background-color: lightgray;
    color: white;
}
.btn-close:hover {
    border: 1px solid white;
    background-color: #dc3545;
}

#dropDownToggle:hover {
    text-decoration: underline;
    text-underline-offset: 5px;
}
</style>