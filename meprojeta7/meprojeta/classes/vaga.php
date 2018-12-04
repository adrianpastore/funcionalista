<?php
class Vaga{
  private $nome;
  private $funcao;
  private $salario;
  private $idVaga;
  public function empresa($nome,$funcao,$salario){
      $this->nome=$nome;
      $this->funcao=$funcao;
      $this->salario=$salario;
  }
  //Getter's
  public function getNome(){return $this->nome;}
  public function getFuncao(){return $this->funcao;}
  public function getSalario(){return $this->salario;}
  public function getIdVaga(){return $this->idVaga;}

  //Setter's
  public function setNome($nome){$this->nome = $nome;}
  public function setFuncao($funcao){$this->funcao = $funcao;}
  public function setSalario($salario){$this->salario = $salario;}
  public function setIdVaga($idVaga){$this->idVaga = $idVaga;}
}
?>
