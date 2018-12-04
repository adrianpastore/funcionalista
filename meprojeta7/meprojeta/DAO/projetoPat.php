<?php
require_once('../classes/projeto.php');
require_once('../classes/patrocinador.php');
require_once('projetoDAO.php');
require_once('patrocinadorDAO.php');
require_once('absdao.php');

class projetoDao extends dao{
    public function lista() {
        $conn = $this->criaConexao();
        $sql = 'SELECT * FROM projetos';
        $res = pg_query($conn,$sql);
        $projetos = array();
        while($projeto = pg_fetch_assoc($res)){
            array_push($projetos,$projeto);
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

?>
