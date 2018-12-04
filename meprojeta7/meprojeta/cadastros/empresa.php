<?php require('../base/header.php'); ?>


<h3 class="display-4 text-center"> Cadastro de Empresas </h3>
<hr class="bg-dark mb-4 w-25">
<div class="container container mt-4 mb-5">
    <div class="container">

      <form action="../inserir/empresa.php" method="post">
        <div class="form-group">
          <label>Nome da Empresa ou Instituição:</label>
          <input name="nomeEmpresa" type="text" class="form-control" placeholder="Empresa ou Instituição">
        </div>
        <div class="form-group">
          <label>CNPJ:</label>
          <input name="cnpj" type="text" maxlength="14" class="form-control" placeholder="CNPJ">
        </div>
        <div class="form-group">
          <label>Endereço:</label>
          <input name="enderecoEmpresa" type="text" class="form-control" placeholder="Ex.:Avenida do Rosário, blc 5, apt 2 - São Paulo">
        </div>
        <input name="cadastrar" class="btn btn-outline-info" type="submit" value="Cadastrar">
      </form>

    </div>
</div>


<?php require('../base/footer.php'); ?>
