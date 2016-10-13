<?php 
class Camion
{
	public $ruedas=3;
	public $color="verde";
	public $tipo="Agricola";
	public $remolque=1;

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
	public function getremolque(){
		return $this->remolque;
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
	public function setremolque($rem){
		$this->remolque=$rem;
	}
}
?>