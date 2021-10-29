<?php require_once("../includes/defaultConnect.php"); ?>
<?php require_once("../includes/defaultHeader.php"); ?>
<?php require_once("../includes/defaultMenu.php"); ?>
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div class="text-center">
        <?php require_once("../includes/_postAlunos.php"); ?>
       
        <?php
        $alunoEditar = array('cod_aluno' => null, 'nome' => null, 'tratamento' => null, 'data_nasc' => null, 'cpf' => null,'rg' => null,'uf_rg' => null,'endereco' => null,'bairro' => null,
                             'logradouro' => null,'celular' => null, 'email' => null, 'profissao' => null, 'sexo' => null,'modalidade' => null, 'status' => null,);
        if (isset($_GET['cod_alunos'])){
          $sql = mysqli_query($connect,'select * from aluno where cod_aluno = '.$_GET['cod_aluno']);
          if (mysqli_num_rows($sql) > 0){
            $alunoEditar = mysqli_fetch_array($sql);
          }
        }
        ?>
        <div class="btn float-right"><a href="../aluno">Voltar</a></div>
        <h4 class="text-center">Manutenção de alunos</h4>
      </div>
      <hr>
      <form method="post">
        <input type="hidden" class="form-control" id="cod_aluno" name="id" value="<?php print $alunoEditar['cod_aluno']; ?>">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome" name="nome" value="<?php print $alunoEditar['nome']; ?>">
        </div>
        <div class="form-row">
          <div class="form-group col-md-9">
            <label for="tratamento" class ='sa'>Tratamento:</label>
            <input type="text" class="form-control" id="tratamento" name="tratamento" value="<?php print $alunoEditar['tratamento']; ?>">
          </div>
          <div class="form-group col-md-3">
            <label for="data">Data de nascimento:</label>
            <input type="date" class="form-control date-mask to-date" id="data_nasc" name="data_nasc" value="<?php print $alunoEditar['data_nasc']; ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-5">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="<?php print $alunoEditar['cpf']; ?>">
          </div>
          <div class="form-group col-md-5">
            <label for="rg">RG:</label>
            <input type="text" class="form-control" id="rg" name="rg" value="<?php print $alunoEditar['rg']; ?>">
          </div>
          <div class="form-group col-md-2">
            <label for="uf_rg">UF-RG:</label>
            <input type="text" class="form-control" id="uf_rg" name="uf_rg" value="<?php print $alunoEditar['uf_rg']; ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="<?php print $alunoEditar['endereco']; ?>">
          </div>
          <div class="form-group col-md-4">
            <label for="logradouro">Logradouro:</label>
            <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?php print $alunoEditar['logradouro']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="bairro">Bairro:</label>
          <input type="text" class="form-control" id="bairro" name="bairro" value="<?php print $alunoEditar['bairro']; ?>">
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="celular">Celular:</label>
            <input type="text" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" maxlength="14" autocomplete="off" id="celular" name="celular"  value="<?php print $alunoEditar['celular']; ?>">
          </div>
          <div class="form-group col-md-8">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?php print $alunoEditar['email']; ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="profissao">Profissão:</label>
            <input type="text" class="form-control" id="profissao" name="profissao" value="<?php print $alunoEditar['profissao']; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="sexo">Sexo:</label>
            <input type="text" class="form-control" id="sexo" name="sexo" value="<?php print $alunoEditar['sexo']; ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="modalidade">Modalidade:</label>
            <input type="text" class="form-control" id="modalidade" name="modalidade" value="<?php print $alunoEditar['modalidade']; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="status">Status:</label>
            <input type="text" class="form-control" id="status" name="status" value="<?php print $alunoEditar['status']; ?>">
          </div>
        </div>
        <div class="float-right">
          <button type="reset" class="btn btn-default">Limpar</button>
          <button type="submit" class="btn btn-primary">Gravar</button>
        </div>
      </form>
    </div>
  </div>
<?php require_once("../includes/defaultFooter.php"); ?>
