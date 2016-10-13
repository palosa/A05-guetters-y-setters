<?php 
include "getterysetter.php";

//gett aqui pides-dame
$moto1=new Moto();
$tipo=$moto1->gettipo();
echo $tipo."<br>";
$ruedas=$moto1->getruedas();
echo $ruedas."<br>";
$color=$moto1->getcolor();
echo $color."<br>";
$espejos=$moto1->getespejos();
echo $espejos."<br>";

//setters aqui cambia,modifica le pongo el valor q quiero
$moto1->settipo("harley");
$tipow=$moto1->gettipo();
echo $tipow."<br>";
//2
$moto2=new Moto();
$moto2->setcolor("verde");
$color2=$moto2->getcolor();
echo $color2."<br>";
//3
$moto3=new Moto();
$moto3->setruedas(5);
$rueda3=$moto3->getruedas();
echo $rueda3."<br>";
//4
$moto4=new Moto();
$moto4->setespejos(4);
$espejos4=$moto4->getespejos();
echo $espejos4. "<br>";

?>


