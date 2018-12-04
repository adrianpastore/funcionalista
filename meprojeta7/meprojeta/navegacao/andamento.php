<?php require('../base/header.php'); ?>


<h3 class="display-4 text-center"> Andamento dos Projetos </h3>
<hr class="bg-dark mb-4 w-25">
<div class="container container mt-4 mb-5">
    <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th class="th">Projeto</th>
            <th class="th">Empresa</th>
            <th class="th">Patrocinador</th>
            <th class="th">Status</th>
            <th class="th">Início em:</th>
            <th class="th">Previsão de conclusão para:</th>
            <th class="th"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>A</td>
            <td>AAAA</td>
            <td>CCAA</td>
            <td>Fase Inicial</td>
            <td>25/11/2018</td>
            <td>02/03/2019</td>
            <td>
              <a href="#"><input name"editar" class="btn btn-outline-info" type="submit" value="Editar"></a>
              <a href="#"><input name="excluir" class="btn btn-outline-info" type="submit" value="Excluir"></a>
            </td>
          </tr>
          <tr>
            <td>B</td>
            <td>BBBB</td>
            <td>FAPAE</td>
            <td>Fase de Conclusão</td>
            <td>09/03/2018</td>
            <td>10/12/2018</td>
            <td>
              <a href="#"><input name"editar" class="btn btn-outline-info" type="submit" value="Editar"></a>
              <a href="#"><input name="excluir" class="btn btn-outline-info" type="submit" value="Excluir"></a>
            </td>
          </tr>
          <tr>
            <td>C</td>
            <td>CCCC</td>
            <td>WWWWWW</td>
            <td>Fase de Desenvolvimento</td>
            <td>15/06/2018</td>
            <td>20/07/2019</td>
            <td>
              <a href="#"><input name"editar" class="btn btn-outline-info" type="submit" value="Editar"></a>
              <a href="#"><input name="excluir" class="btn btn-outline-info" type="submit" value="Excluir"></a>
            </td>
          </tr>
        </tbody>
      </table>
</div>


<?php require('../base/footer.php'); ?>
