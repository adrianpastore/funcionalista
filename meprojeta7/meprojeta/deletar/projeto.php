<?php
  require_once('../DAO/projetoDAO.php');
  $empresa = new projetoDAO;
  $empresa->deletar($_GET['idProjeto']);
  require_once('../navegacao/projetos.php');
?>
