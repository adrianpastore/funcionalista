<?php require('../base/header.php'); ?>


<h3 class="display-4 text-center"> Cadastro de Patrocinadores </h3>
<hr class="bg-dark mb-4 w-25">
<div class="container container mt-4 mb-5">
    <div class="container">
      <form action="../inserir/patrocinadores.php" method="post">
        <div class="form-group">
          <label>Nome:</label>
          <input name="nomePatrocinador" type="text" class="form-control" placeholder="Patrocinador">
        </div>
        <div class="form-group">
          <label>Tipo:</label>
          <select name="tipoPatrocinador" class="form-control">
            <option value="Física">Física</option>
            <option value="Jurídica">Jurídica</option>
          </select>
        </div>
        <input name="cadastrar" class="btn btn-outline-info" type="submit" value="Cadastrar">
      </form>

    </div>
</div>


<?php require('../base/footer.php'); ?>
