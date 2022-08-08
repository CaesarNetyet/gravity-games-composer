<nav class="navbar navbar-expand-lg bg-dark navbar-dark px-md-5">
  <div class="container-fluid px-md-5">
    <a class="navbar-brand" href="#">Gravity Games</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="d-flex " role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    <ul class="navbar-nav gap-md-4 mx-md-auto mb-2 mb-lg-0">
      <li class="nav-item">
    <a class="nav-link  active" aria-current="page" href="#">Todos los juegos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  active" href="#">Sobre nosotros</a>
  </li>
  <li class="nav-item">
  <li class="nav-item dropdown">
          <a class="nav-link active  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
  
      
      <div class="sesiones">
      <button type="button" class=" text-black  mx-md-2 btn btn-warning" data-bs-toggle="modal" data-bs-target="#iniciarsesion">Iniciar Sesión</button>
      <a class="btn btn-success " href="#">Registrarse</a>
      </div>
    </div>
  </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="iniciarsesion" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title " id="exampleModalLabel">Hora de volar!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST">  
      <div class="modal-body">
        <label for="user">Email o nombre de usuario</label>
        <input placeholder="Ingresa tu Email o Nombre de usuario" type="text" class="form-control" name="user" id="user">
        <label for="password">Contraseña</label>
        <input placeholder="Ingresa tu contraseña" type="password" class="form-control" name="password" id="password">
         
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success w-100">Iniciar sesión</button>
      </div>
      </form>
    </div>
  </div>
</div>