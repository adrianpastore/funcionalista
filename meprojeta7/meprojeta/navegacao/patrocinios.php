<?php require('../base/header.php'); ?>

<h3 class="display-4 text-center"> Patrocinadores </h3>
<hr class="bg-dark mb-4 w-25">
<div class="container container mt-4 mb-5">
    <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th class="th">ID</th>
            <th class="th">Nome</th>
            <th class="th">Tipo</th>
            <th class="th"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          require_once('../DAO/patrocinadorDAO.php');
          $patd = new patrocinadorDao;
          $patrocinadores = $patd->lista();
          foreach($patrocinadores as $pat) {
            echo
            '<tr>
                <td class="td">'.$pat["idPatrocinador"].'</td>
                <td class="td">'.$pat["nome"].'</td>
                <td class="td">'.$pat["tipo"].'</td>
                <td class="td">
                <a href="../alterar/patrocinador.php?idPatrocinador='.$pat["idPatrocinador"].'"><input name"editar" class="btn btn-outline-info" type="submit" value="Editar"></a>
                <a href="../deletar/patrocinador.php?idPatrocinador='.$pat["idPatrocinador"].'"><input name="excluir" class="btn btn-outline-info" type="submit" value="Excluir"></a>
                </td>
            </tr>';
          }
          ?>
        </tbody>
      </table>
</div>


<?php require('../base/footer.php'); ?>
