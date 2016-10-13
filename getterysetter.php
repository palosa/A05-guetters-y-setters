<?php
//crear una clase llamada moto.
class Moto
{
  //las propiedades de la moto.
  public $ruedas=3;
  public $color='negro';
  public $tipo ='scooter';
  public $espejos=2;

//getters
  public function getruedas(){
    return $this->ruedas;
  }
  public function getcolor(){
    return $this->color;
  }
  public function gettipo(){
    return $this->tipo;
  }
  public function getespejos(){
    return $this->espejos;
  }

//setters
  public function setruedas($rue){
    $this->ruedas=$rue;
  }
  public function setcolor($col){
    $this->color=$col;
  }
  public function settipo($tpo){
    $this->tipo=$tpo;
  }
  public function setespejos($esp){
    $this->espejos=$esp;
  }
}
 ?>
