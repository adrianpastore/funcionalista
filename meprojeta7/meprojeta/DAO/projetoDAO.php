<?php
require_once('../classes/projeto.php');
require_once('../classes/empresa.php');
require_once('empresaDAO.php');
require_once('absdao.php');

class projetoDao extends dao{
    public function lista() {
        $conn = $this->criaConexao();
        $sql = 'SELECT * FROM projetos';
        $res = pg_query($conn,$sql);
        $projetos = array();
        while($projeto = pg_fetch_assoc($res)){
          $p = new Projeto ($projeto['nome'], $projeto['descricao']);
          $p->setIdProjeto($projeto['idProjeto']);
          $e = new EmpresaDao ();
          $p->setEmpresa($e->buscanome($projeto['CNPJ']));
          array_push($projetos,$p);
        }
        pg_close($conn);
        return $projetos;
    }
    public function add($projeto){
        $conn = $this->criaConexao();
        $sql = 'INSERT INTO projetos (nome, descricao, "CNPJ") VALUES ($1, $2, $3)';
        $vetor = array($projeto->getNome(), $projeto->getDesc(), $projeto->getEmpresa()->getcnpj());
        pg_query_params($conn,$sql,$vetor);
        pg_close($conn);
    }
    public function deletar($id) {
        $conn = $this->criaConexao();
        $sql2 = 'delete from projetos where "idProjeto" = $1';
        pg_query_params($conn, $sql2, array($id));
        pg_close($conn);
    }
    public function busca($id) {
        $conn = $this->criaConexao();
        $sql3 = 'SELECT * FROM projetos WHERE "idProjeto" = $1';
        $vetor2 = array($id);
        $res = pg_query_params($conn,$sql3,$vetor2);
        $buscaprojeto = array();
        while($projeto = pg_fetch_assoc($res)){
            array_push($buscaprojeto,$projeto);
        }
        pg_close($conn);
        return $buscaprojeto;
    }
}

/*$empresadao = new EmpresaDao;
$emp = new Empresa('CodeGirl', '23514412',  'Rua dos Rosários, 789, blc 301');
$empresadao->add($emp);
echo "<br>";
echo "<br>";
echo "<br>";



$proj = new Projeto('Tecnologia e acessibilidade', 'Desenvolver um programa voltado para a inclusão social');
$proj->setEmpresa($emp);
$projetodao = new projetoDao;
$projetodao->add($proj);
var_dump($proj);
var_dump($emp);
echo "<br>";
echo "<br>";
echo "<br>";
//var_dump($proj);
*/
?>
