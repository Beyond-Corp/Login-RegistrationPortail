<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">{{  config ('app.name') }}</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


          <li class="nav-item">
            <a class="nav-link" href="{{ route ('logout') }}">Logout</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route ('login')}}">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route ('registration') }}">Registration</a>
          </li>   



        
        </ul>
        <form class="d-flex" role="search">

          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>