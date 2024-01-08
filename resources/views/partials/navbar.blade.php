<nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white fixed-top border-bottom box-shadow mb-3">
      <div class="container-fluid">
      <a href="{{ route('home') }}" class="navbar-brand" style="color: black; text-align: center; display: inline; width: 150px;"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#172a46" class="bi bi-box-seam" viewBox="0 0 16 16"><path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/></svg> OFC App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                  aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
            <br>
              <ul class="navbar-nav flex-grow-1">
                  <li class="nav-item">
                      <a href="{{ route('home') }}" class="nav-link text-center" id="navBtn" >Home</a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('orders') }}"class="nav-link text-center" id="navBtn" >Ordini</a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('customers') }}" class="nav-link text-center" id="navBtn" >Clienti</a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('suppliers') }}" class="nav-link text-center" id="navBtn" >Fornitori</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-center" id="navBtn" >Agenti</a>
                  </li>
                  <li class="nav-item" id="helpNavBtn">
                      <a href="{{ route('doc') }}" style="width: 100px; text-align: center;" class="nav-link text-center" id="navBtn" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"/></svg></a>
                  </li>
                  <button id="mobileCloseOnly" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg> CHIUDI MENU </button>
              </ul>
              <p class="navBarMobileOnly" style="color: lightgray;"><i>Developed by Antonio Labellarte | ver. 1.0</i><p>
          </div>
      </div>
</nav>

<style>
#navBtn {
    border: 1px solid white;
    border-radius: 5px;
    padding: 5px;
    color: black;
    text-decoration: none;
}
#navBtn:hover {
    border: 1px solid lightgray;
    border-radius: 5px;
    cursor: pointer;
    background-color: #172a46;
    color: white;
}

a {
    width: 100px;
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
</style>