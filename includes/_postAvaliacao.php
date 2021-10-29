<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      /*
      * RECEBENDO VALORES DO FORMULARIO (padrao)
      */
      $id = $_POST['id'];

      if (isset($_POST['excluir'])){
        $sql = mysqli_query($connect,'delete from avaliacao where cod_avaliacao = '.$id);
        if (!$sql) {
          print '<div class="alert alert-warning" role="alert">Problemas ao excluir avalição</div>';
          print '<div class="btn btn-primary float-right"><a href="../avaliacao" style="color: #fff;">Voltar</a></div>';
          exit;
        } else{
          print '<div class="alert alert-success" role="alert">Avalição excluída com sucesso</div>';
          print '<div class="btn btn-primary float-right"><a href="../avaliacao" style="color: #fff;">Voltar</a></div>';
          exit;
        }
      } else{
        /*
        * RECEBENDO VALORES DO FORMULARIO
        */
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        /*
        * VALIDANDO CAMPOS DO FORMULARIO
        */
        if ((empty($nome)) || (empty($idade))){
          print '<div class="alert alert-danger" role="alert">Todos os campos do cadastro são obrigatórios</div>';
        } elseif (empty($id)) {
          $sql = mysqli_query($connect,'insert into aluno (nome, data_nasc) values ("'.$nome.'",'.$idade.')');
          if (!$sql) {
            print '<div class="alert alert-warning" role="alert">Problemas ao efetuar cadastro de cliente</div>';
          } else{
            print '<div class="alert alert-success" role="alert">Cadastro efetuado com sucesso</div>';
          }
        }
        else{
          $sql = mysqli_query($connect,'update aluno set nome = "'.$nome.'", data_nasc = '.$idade.' where cod_aluno = '.$id);
          if (!$sql) {
            print '<div class="alert alert-warning" role="alert">Problemas ao editar cliente</div>';
          } else{
            print '<div class="alert alert-success" role="alert">Alteração efetuada com sucesso</div>';
          }
        }
      }
  }
 ?>
