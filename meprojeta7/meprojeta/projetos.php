<?php require('../base/header.php'); ?>


<h3 class="display-4 text-center"> Cadastro de Projetos </h3>
<hr class="bg-dark mb-4 w-25">
<div class="container container mt-4 mb-5">
    <div class="container">
      <form action="../inserir/projeto.php" method="post">
          <div class="form-group">
            <label>Empresa Responsável:</label>
              <select name="empresa" class="form-control" id="empresa">
                <option value="0" disabled selected>Nenhum</option>
                  <?php
                    require_once('../DAO/empresaDAO.php');
                    $emp = new EmpresaDao();
                    $listEmp = $emp->lista();
                    foreach($listEmp as $e) {
                        echo
                        '<option value='.$e['idEmpresa'].'>'.$e['nome'] .'  ('.$e['CNPJ'].')'.'</option>';
                    }
                  ?>
              </select>
          </div>
          <div class="form-group">
            <label>Nome do Projeto</label>
            <input name="nomeProjeto" type="text" class="form-control" placeholder="Projeto">
          </div>
          <div class="form-group">
            <label>Descrição:</label><br>
            <textarea name="descricao" rows="8" cols="80" class="form-control" placeholder="Descreva o projeto"></textarea>
          </div>
          <div class="form-group">
            <label>Etapa:</label>
            <select name="tipoEtapa" class="form-control">
              <option value="1">Fase Inicial</option>
              <option value="2">Fase de Desenvolvimento</option>
              <option value="3">Fase de Finalização</option>
            </select>
          </div>
          <div class="form-group">
            <label>Data de início da etapa:</label><br>
            <input type="date" name="dataInicio" value="" class="form-control">
          </div>
          </select>
          <div class="form-group">
            <label>Previsão de término da etapa para:</label><br>
            <input type="date" name="dataPrevisaoTermino" value="" class="form-control">
          </div>
          <hr>

          <h4>Patrocinadores</h4>
          <button id="maisPat" type="submit" class="btn btn-primary mb-2" name="maisPat">Novo Patrocinador +</button>
          <div class="todospat" name="todosPatrocinadores">
            <div id="patrocinador" class="cadastro" name="patrocinador">
              <br><label>Patrocinador[1]:</label>
              <select name="pat[1]" class="form-control" id="pat">
                  <option value="0" disabled selected>Nenhum</option>
                    <?php
                      require_once('../DAO/patrocinadorDAO.php');
                      $pat = new patrocinadorDao();
                      $listPat = $pat->lista();
                      foreach($listPat as $p) {
                          echo
                          '<option value='.$p['idPatrocinador'].'>'.$p['nome'] .'  ('.$p['tipo'].')'.'</option>';
                      }
                    ?>
              </select>
              <div class="form-group">
                <label>Valor do investimento:</label>
                <input name="valorInvestimento" type="number" max="10000"class="form-control" placeholder="Valor do Investimento em reais">
              </div>
            </div>
          </div>
        <br>

        <input name="cadastrar" class="btn btn-outline-info" type="submit" value="Cadastrar">

      </form>
      <br>

    </div>
</div>


<?php require('../base/footer.php'); ?>
