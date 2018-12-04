<?php
class Empresa{
  private $idEmpresa;
  private $nome;
  private $cnpj;
  private $endereco;
  public function empresa($nome,$cnpj,$endereco){
      $this->nome=$nome;
      $this->cnpj=$cnpj;
      $this->endereco=$endereco;
  }
  //Getter's
  public function getIdEmpresa(){return $this->idEmpresa;}
  public function getNome(){return $this->nome;}
  public function getcnpj(){return $this->cnpj;}
  public function getEndereco(){return $this->endereco;}

  //Setter's
  public function setIdEmpresa($idEmpresa){$this->idEmpresa = $idEmpresa;}
  public function setNome($nome){$this->nome = $nome;}
  public function setcnpj($cnpj){$this->cnpj = $cnpj;}
  public function setEndereco($endereco){$this->endereco = $endreco;}
}
?>
