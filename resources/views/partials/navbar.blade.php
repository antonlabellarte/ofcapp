<nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white fixed-top border-bottom box-shadow mb-3">
      <div class="container-fluid">
      <a href="{{ route('home') }}" class="navbar-brand" style="color: black; text-align: center; display: inline; width: 150px;"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16"><path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/></svg> OFC App</a>
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
              </ul>
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
</style>