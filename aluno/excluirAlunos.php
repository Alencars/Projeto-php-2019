<?php require_once("../includes/defaultConnect.php"); ?>
<?php require_once("../includes/defaultHeader.php"); ?>
<?php require_once("../includes/defaultMenu.php"); ?>
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div class="text-center">
        <?php require_once("../includes/_postClientes.php"); ?>
        <?php
        $clienteEditar = array('id' => null, 'nome' => null, 'idade' => null, );
        if (isset($_GET['idCliente'])){
          $sql = mysqli_query($connect,'select * from cliente where id = '.$_GET['idCliente']);
          if (mysqli_num_rows($sql) > 0){
            $clienteEditar = mysqli_fetch_array($sql);
          }
        }
        ?>
        <h4 class="text-center">Exclusão de aluno</h4>
      </div>
      <hr>
      <form method="post">
        <input type="hidden" class="form-control" id="excluir" name="excluir" value="excluir">
        <input type="hidden" class="form-control" id="id" name="id" value="<?php print $clienteEditar['id'] ?>">
        <div class="alert alert-warning" role="alert">Confirmar exclusão do cliente <?php print $clienteEditar['nome']; ?>?</div>
          <div class="float-right">
            <div class="btn btn-primary"><a href="../clientes" style="color: #fff;">Não</a></div>
            <button type="submit" class="btn btn-danger">Sim</button>
          </div>
        </div>
      </form>
    </div>
  </div>
<?php require_once("../includes/defaultFooter.php"); ?>
