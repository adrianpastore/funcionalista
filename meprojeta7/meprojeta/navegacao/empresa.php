<?php require('../base/header.php'); ?>


<h3 class="display-4 text-center"> Empresas </h3>
<hr class="bg-dark mb-4 w-25">
<div class="container container mt-4 mb-5">
    <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th class="th">ID</th>
            <th class="th">nome</th>
            <th class="th">Endereço</th>
            <th class="th">CNPJ</th>
            <th class="th"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          require_once('../DAO/empresaDAO.php');
          $ed = new EmpresaDao;
          $empresas = $ed->lista();
          foreach($empresas as $emp) {
            echo
            '<tr>
                <td class="td">'.$emp["idEmpresa"].'</td>
                <td class="td">'.$emp["nome"].'</td>
                <td class="td">'.$emp["endereço"].'</td>
                <td class="td">'.$emp["CNPJ"].'</td>
                <td class="td">
                <a href="../alterar/empresa.php?idEmpresa='.$emp["idEmpresa"].'"><input name"editar" class="btn btn-outline-info" type="submit" value="Editar"></a>
                <a href="../deletar/empresa.php?idEmpresa='.$emp["idEmpresa"].'"><input name="excluir" class="btn btn-outline-info" type="submit" value="Excluir"></a>
                </td>
            </tr>';
          }
          ?>
        </tbody>
      </table>
</div>


<?php require('../base/footer.php'); ?>
