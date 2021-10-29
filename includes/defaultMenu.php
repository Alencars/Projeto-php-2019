<?php

 ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Sistema</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../home">Home</a>
      </li>
      <li class="nav-item my-2 my-lg-0">
        <a class="nav-link" href="../aluno">Alunos</a>
      </li>
      <li class="nav-item my-2 my-lg-0">
        <a class="nav-link" href="../avaliacao">Avaliação</a>
      </li>
    </ul>
    <ul class="navbar-nav my-2 my-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!-- <?php print $_SESSION["usuarioNome"]; ?> -->
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Alterar dados</a>
          <a class="dropdown-item" href="#">Alterar senha</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../logout">( Sair )</a>
      </li>
    </ul>
  </div>
</nav>
<br>
