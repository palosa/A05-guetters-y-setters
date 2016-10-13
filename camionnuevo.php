<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>'PROBANDO GETTERS Y SETTERS'</title>
  </head>
  <body>

    <?php
    //include para llamar a la clase camion.
    include 'clasecamion.php';
    //Crear en variable camionMola elobjeto de la clase camion.
    $camionMola=new Camion();
    //Prueba getters
    echo 'COMPROBACION GETTERS';
    echo "<br>";
    $ruedasCamion=$camionMola->getruedas();
    echo 'Las ruedas del camion son: '.$ruedasCamion;
    echo "<br>";
    $colorCamion=$camionMola->getcolor();
    echo 'El color del camion es: '.$colorCamion;
    echo "<br>";
    $tipoCamion=$camionMola->gettipo();
    echo 'El tipo de vehiculo es: '.$tipoCamion;
    echo "<br>";
    $remolqueCamion=$camionMola->getremolque();
    echo 'Numero de remolques del camion: '.$remolqueCamion;


    //Prueba de setters
    echo "<br>";
    echo 'COMPROBACION SETTERS';
    $ruedasNuevas=10; //inicializo variable ruedasnuevas para pasarselo a setRuedas
    //Volvemos a llamar a getRuedas para ver las ruedas modificadas en pantalla
    $camionMola->setruedas($ruedasNuevas);
    echo "<br>";
    $ruedasNuevasCamion=$camionMola->getruedas();
    echo 'Las nuevas ruedas son: '.$ruedasNuevasCamion;

    $colorNuevo='rojo';
    $camionMola->setcolor($colorNuevo);
    echo "<br>";

    $colorNuevoCamion=$camionMola->getcolor();
    echo 'El color nuevo del camion es: '.$colorNuevoCamion;

    $tipoNuevo='trailer';
    $camionMola->settipo($tipoNuevo);
    echo "<br>";

    $tipoNuevoCamion=$camionMola->gettipo();
    echo 'El nuevo camion es un: '.$tipoNuevoCamion;

    $remolqueNuevo=2;
    $camionMola->setremolque($remolqueNuevo);
    echo "<br>";

    $remolqueNuevoCamion=$camionMola->getremolque();
    echo 'Ahora el numero de remolque son: '.$remolqueNuevoCamion;


     ?>


  </body>
</html>
