<?php require('../base/header.php'); ?>

<h3 class="display-4 text-center"> Projetos </h3>
<hr class="bg-dark mb-4 w-25">
<div class="container container mt-4 mb-5">
    <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th class="th">ID do Projeto</th>
            <th class="th">nome</th>
            <th class="th">Descrição</th>
            <th class="th">Empresa</th>
            <th class="th"></th>
          </tr>
        </thead>
        <tbody>
          <?php

          require_once('../DAO/projetoDAO.php');
          require_once('../DAO/empresaDAO.php');
          $pd = new projetoDao();
          $projetos = $pd->lista();
          $e = new EmpresaDAO;
          foreach($projetos as $proj) { ?>
            <tr>
                  <td><?php echo $proj->getIdProjeto()?></td>
                  <td><?php echo $proj->getNome()?></td>
                  <td><?php echo $proj->getDesc()?></td>
                  <td><?php print_r($proj->getEmpresa()['nome'])?></td>
                  <td>
                    <a href="../alterar/projeto.php?idProjeto=<?php echo $proj->getIdProjeto() ?>"><input name"editar" class="btn btn-outline-info" type="submit" value="Editar"></a>
                    <a href="../deletar/projeto.php?idProjeto=<?php echo $proj->getIdProjeto() ?>"><input name="excluir" class="btn btn-outline-info" type="submit" value="Excluir"></a>
                  </td>
              </tr>
              <?php } ?>

        </tbody>
      </table>
</div>


<?php require('../base/footer.php'); ?>
