<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="navbar-brand " aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="/mycar">My Car</a>
        </li>
      </ul>
      <span class="navbar-text">
          <div class="dropdown">
            <button type="button" class="btn btn-light"><a style="text-decoration: none; color :black;" href="/mycar/add">Add Car</a></button>
            <button class="btn dropdown-toggle btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item text-dark" href="/profil">Profil</a></li>
            <li><a class="dropdown-item text-dark" href="/logout">Logout</a></li>
            </ul>
          </div>
      </span>
    </div>
  </div>
</nav>