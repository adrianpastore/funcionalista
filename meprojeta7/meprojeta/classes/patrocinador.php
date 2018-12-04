<?php
class Patrocinador{
  private $nome;
  private $tipo;

  public function patrocinador($nome,$tipo){
      $this->nome=$nome;
      $this->tipo=$tipo;
  }
  //Getter's
  public function getNome(){return $this->nome;}
  public function getTipo(){return $this->tipo;}
  public function getIdPatrocinador(){return $this->idPatrocinador;}

  //Setter's
  public function setNome($nome){$this->nome = $nome;}
  public function setTipo($tipo){$this->tipo = $tipo;}
  public function setIdPatrocinador($idPatrocinador){$this->idPatrocinador = $idPatrocinador;}
}
/*
$Patrocinador = new Patrocinador("vacamu","fisica","9821");
var_dump($Patrocinador);
*/
?>
