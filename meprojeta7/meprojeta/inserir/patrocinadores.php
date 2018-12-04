<?php
  require_once('../classes/patrocinador.php');
  require_once('../DAO/patrocinadorDAO.php');
  $novoPat = new Patrocinador($_POST['nomePatrocinador'],$_POST['tipoPatrocinador']);
  $patDao = new patrocinadorDao;
  $patDao->add($novoPat);
  require_once('../navegacao/patrocinios.php');

?>
