<?php

class animal
{
public $animal='perro';
public$patas='4';

public function getanimal(){
  return $this->animal;
}
public function getpatas(){
  return $this->patas;
}
public function setanimal($ani){
  $this->animal=$ani;
}
public function setpatas($pa){
  $this->patas=$pa;
}

}


 ?>
