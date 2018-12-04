<?php
  require_once('../DAO/empresaDAO.php');
  $empresa = new EmpresaDao;
  $empresa->deletar($_GET['idEmpresa']);
  require_once('../navegacao/empresa.php');
?>
