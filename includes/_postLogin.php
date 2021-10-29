<?php
  /**
  * VALIDACAO DE REQUISICAO
  */
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    /**
    * VALIDACAO DE OBRIGATORIEDADE
    */
    if ((empty($nome)) || (empty($senha))){
      print "Campo nome e senha são obrigatórios";
    } else {
      /**
      * BUSCANDO USUARIO NA TABELA
      */
      $sql = mysqli_query($connect,"select * from usuario
            where nome = '".$nome."' and senha = '".md5($senha)."'");

      if (!$sql){
        print "Problemas para selecionar usuário";
        exit;
      }

      $resultadoLogin = mysqli_num_rows($sql);
      if ($resultadoLogin > 0){
        while ($usuario = mysqli_fetch_array($sql)) {
          if ($usuario['status'] == 0){
            print "Usuário inativo";
          } else {
            session_start();
            $_SESSION['usuarioId'] = $usuario['id'];
            $_SESSION['usuarioNome'] = $usuario['nome'];

            header("location: /sistema/home");
          }
        }
      } else {
        print "Login inválido";
      }
    }
  }
 ?>
