<nav class=" shadow navbar fixed-top navbar-expand-lg navbar-light " style="background-color: #DC3F4D;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php echo DIRPAGE; ?>">MedCon</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo DIRPAGE; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo DIRPAGE."Consulta"; ?>">Marcar Consulta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo DIRPAGE."Medico"; ?>">Medico</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo DIRPAGE."AdminMenu"; ?>">AdminMenu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo DIRPAGE; ?>">Sobre Nós</a>
        </li>
      </ul>
      <div class="d-flex">
        <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark">Login</button>
      </div>
    </div>
  </div>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
      </div>
      <form action="" method="post">
        <div class="modal-body">
          <div class=" row g-2">
            <div class=" col-auto">
              <label for="Nome" class="form-label">Nome de Usuario</label>
              <input type="text" class="form-control" id="nome" name="nome" required>

            </div>
            <div class=" col-auto">
              <label for="SobreNome" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Iniciar Sessao</button>
        </div>
      </form>
    </div>
  </div>
</div>