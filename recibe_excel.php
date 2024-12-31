<?php
require('config.php');
$tipo       = $_FILES['dataCliente']['type'];
$tamanio    = $_FILES['dataCliente']['size'];
$archivotmp = $_FILES['dataCliente']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(";", $linea);
       
        $codigo = !empty($datos[0])  ? ($datos[0]) : '';
		$nombre = !empty($datos[1])  ? ($datos[1]) : '';
        $copas  = !empty($datos[2])  ? ($datos[2]) : '';
        $jugadores =  !empty($datos[3])  ? ($datos[3]) : '';
        $mejorBrawler = !empty($datos[4])  ? ($datos[4]) : '';
        $region = !empty($datos[5])  ? ($datos[5]) : '';
       
        $insertar = "INSERT INTO clasificacion( 
            `nombreDelEquipo`, 
            `copas`,
            `jugadores`, 
            `mejorBrawler`,
            `idRegion`
        ) VALUES(
            '$nombre',
			'$copas',
            '$jugadores',
            '$mejorBrawler',
            '$region'
        )";
        mysqli_query($con, $insertar);
    }

      echo '<div>'. $i. "). " .$linea.'</div>';
    $i++;
}


  echo '<p style="text-aling:center; color:#333;">Total de Registros: '. $cantidad_regist_agregados .'</p>';

?>

<a href="index.php">Atras</a>