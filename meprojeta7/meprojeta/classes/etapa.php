<?php
class Etapa{
  private $tipo;
  private $dataInicio;
  private $dataPrevisaoTermino;
  private $idEtapa;
  public function etapa($tipo,$dataInicio,$dataPrevisaoTermino){
      $this->tipo=$tipo;
      $this->dataInicio=$dataInicio;
      $this->dataPrevisaoTermino=$dataPrevisaoTermino;
  }
  //Getter's
  public function getTipo(){return $this->tipo;}
  public function getDataInicio(){return $this->dataInicio;}
  public function getDataPrevisaoTermino(){return $this->dataPrevisaoTermino;}
  public function getIdEtapa(){return $this->idEtapa;}

  //Setter's
  public function setTipo($tipo){$this->tipo = $tipo;}
  public function setDataInicio($dataInicio){$this->dataInicio = $dataInicio;}
  public function setDataPrevisaoTermino($dataPrevisaoTermino){$this->dataPrevisaoTermino = $dataPrevisaoTermino;}
  public function setIdEtapa($idEtapa){$this->idEtapa = $idEtapa;}
}
?>
