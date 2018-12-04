<?php
  require_once('../DAO/patrocinadorDAO.php');
  $pat = new patrocinadorDao;
  $pat->deletar($_GET['idPatrocinador']);
  require_once('../navegacao/patrocinios.php');
?>
