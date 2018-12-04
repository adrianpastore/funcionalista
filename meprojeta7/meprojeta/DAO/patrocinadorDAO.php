<?php
require_once('../classes/patrocinador.php');
require_once('absdao.php');

class patrocinadorDao extends dao{
    public function lista() {
      $conn = $this->criaConexao();
      $sql = 'SELECT * FROM patrocinador';
      $res = pg_query($conn,$sql);
      $patrocinadores = array();
      while($patrocinador = pg_fetch_assoc($res)){
        array_push($patrocinadores,$patrocinador);
      }
      pg_close($conn);
      return $patrocinadores;
    }
    public function add($patrocinador){
        $conn = $this->criaConexao();
        $sql = 'INSERT INTO patrocinador (nome, tipo) VALUES ($1, $2)';
        $vetor = array($patrocinador->getNome(), $patrocinador->getTipo());
        pg_query_params($conn,$sql,$vetor);
        pg_close($conn);
    }
    public function deletar($id) {
        $conn = $this->criaConexao();
        $sql2 = 'DELETE FROM patrocinador WHERE "idPatrocinador" = $1';
        pg_query_params($conn, $sql2, array($id));
        pg_close($conn);
    }
    public function busca($id) {
        $conn = $this->criaConexao();
        $sql3 = 'SELECT * FROM patrocinador WHERE "idPatrocinador" = $1';
        $vetor2 = array($id);
        $res = pg_query_params($conn,$sql3,$vetor2);
        $buscapatrocinador = array();
        while($patrocinador = pg_fetch_assoc($res)){
            array_push($buscapatrocinador,$patrocinador);
        }
        pg_close($conn);
        return $buscapatrocinador;
    }
}
//$patDao = new patrocinadorDao;
//$pat = new Patrocinador("colgate","fisica");
//$patDao->add($pat);
?>
