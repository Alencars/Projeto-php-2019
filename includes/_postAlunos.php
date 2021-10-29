<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      /*
      * RECEBENDO VALORES DO FORMULARIO (padrao)
      */
      $id = $_POST['id'];

      if (isset($_POST['excluir'])){
        $sql = mysqli_query($connect,'delete from aluno where cod_aluno = '.$id);
        if (!$sql) {
          print '<div class="alert alert-warning" role="alert">Problemas ao excluir aluno</div>';
          print '<div class="btn btn-primary float-right"><a href="../aluno" style="color: #fff;">Voltar</a></div>';
          exit;
        } else{
          print '<div class="alert alert-success" role="alert">Aluno excluído com sucesso</div>';
          print '<div class="btn btn-primary float-right"><a href="../aluno" style="color: #fff;">Voltar</a></div>';
          exit;
        }
      } else{
        /*
        * RECEBENDO VALORES DO FORMULARIO
        */
        $nome = $_POST['nome'];
        $idade = $_POST['data_nasc'];

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
            print '<div class="alert alert-warning" role="alert">Problemas ao editar aluno</div>';
          } else{
            print '<div class="alert alert-success" role="alert">Alteração efetuada com sucesso</div>';
          }
        }
      }
  }
 ?>
