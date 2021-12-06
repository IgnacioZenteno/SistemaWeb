<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" >
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="Inicio.php">Inicio</a></li>
                <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nosotros</a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item " href="quienes_somos.php">¿Quiénes Somos?</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#contacto">Contacto</a></li>
                      </ul>
                    </li>
              </ul>
              <li id="navlogin" class="navbar-nav mb-lg-0">
                <?php if(!empty($user)):?>
                <div class="dropdown">
                  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/logo/profile-user.png"  class="rounded float me-2 active" >
                    <?= $user['nombre']; ?>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonSM">
                    <li><a class="dropdown-item textdrop" href=" " >Datos De Usuario</a></li>        
                    <li><hr class="dropdown-divider "></li>
                    <li><a class="dropdown-item textdrop" href="consultas/logout.php">Cerrar Sesión</a></li>
                  </ul>
                </div>
                <?php else: ?>
                <a class="nav-link active" aria-current="page" href=""><img src="img/logo/profile-userw.png" class="rounded float me-2 " id="icons_profile">Iniciar Sesión</a>
                <?php endif; ?>
              </li>
          </div>
        </div>
      </nav>
    </header>