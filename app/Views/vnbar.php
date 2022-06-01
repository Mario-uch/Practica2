<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../home/bienvenida">Bienvenida <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../home/gasto">Comprar</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Gestionar Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../home/registro">Agregar Usuarios</a>
          <a class="dropdown-item" href="../home/mostrar">Mostrar Usuarios</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Gestionar Compras
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="../home/mostrarCompras">Agregar Compra</a>
          <a class="dropdown-item" href="../home/mostrarCompras">Mostrar Compras</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="../home/buscarRegistro">
      <label>ID del usuario</label>
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" id=id_usuario name="id_usuario">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>