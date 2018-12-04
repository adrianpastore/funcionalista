<?php
abstract class dao{
    protected function criaConexao(){
        $conn = 'port=5432 dbname=meprojeta user=postgres password=postgres';
        return pg_connect($conn);
    }
    abstract public function lista();
    abstract public function add($obj);
    abstract public function deletar($id);
    abstract public function busca($id);
    //abstract public function alterar($obj);
}
?>
