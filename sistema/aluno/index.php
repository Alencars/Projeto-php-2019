<?php require_once("../includes/defaultHeader.php"); ?>
<?php require_once("../includes/defaultMenu.php"); ?>
<div class="row">
  <div class="col-md-6 offset-md-3">
    <div class="btn float-right"><a href="../aluno/manutencaoAlunos.php">Cadastrar</a></div>
    <h4 class="text-center">Relatório de alunos</h4>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Opções</th>
          </tr>
        </thead>
        <tbody>
          <?php require_once("../includes/defaultConnect.php"); ?>
          <?php $sql = mysqli_query($connect, "select * from aluno"); ?>
          <?php while ($resultado = mysqli_fetch_array($sql)) { ?>
            <tr>
              <td> <?php print $resultado['cod_aluno']; ?> </td>
              <td> <?php print $resultado['nome']; ?> </td>
              <td> <?php print $resultado['data_nasc']; ?> </td>
              <td>
                <a href="../aluno/manutencaoAlunos.php?idAluno=<?php print $resultado['id']; ?>">Editar</a> |
                <a href="../aluno/excluirAlunos.php?idAluno=<?php print $resultado['id']; ?>">Excluir</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
        <tfoot></tfoot>
      </table>
    </div>
  </div>
</div>
<?php require_once("../includes/defaultFooter.php"); ?>
