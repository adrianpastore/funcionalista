<?php
require_once('../classes/projeto.php');
require_once('../DAO/projetoDAO.php');
$novoProjeto = new Projeto($_POST['nomeProjeto'],$_POST['descricao']);
$projetoEmpresa = $_POST['empresa'];

require_once('../navegacao/projetos.php');
?>
