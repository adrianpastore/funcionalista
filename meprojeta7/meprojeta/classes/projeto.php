<?php
class Projeto{
  private $idProjeto;
  private $nome;
  private $desc;
  private $empresa;

  public function projeto($nome,$desc){
      $this->nome=$nome;
      $this->desc=$desc;
  }
  //Getter's
  public function getIdProjeto(){return $this->idProjeto;}
  public function getNome(){return $this->nome;}
  public function getDesc(){return $this->desc;}
  public function getEmpresa(){return $this->empresa;}

  //Setter's
  public function setIdProjeto($idProjeto){$this->idProjeto = $idProjeto;}
  public function setNome($nome){$this->nome = $nome;}
  public function setDesc($desc){$this->desc = $desc;}
  public function setEmpresa($empresa){$this->empresa = $empresa;}
}



?>
