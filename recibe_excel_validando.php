<?php
require('config.php');
$tipo       = $_FILES['dataCliente']['type'];
$tamanio    = $_FILES['dataCliente']['size'];

    
if ($_FILES['dataCliente']['error'] !== UPLOAD_ERR_OK) {
    die("Error al cargar el archivo. Código de error: " . $_FILES['dataCliente']['error']);
}

$archivotmp = $_FILES['dataCliente']['tmp_name'];
if (empty($archivotmp)) {
    die("El archivo no se cargó correctamente o está vacío.");
}


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
       
       
if( !empty($codigo) ){
    $checkemail_duplicidad = ("SELECT codigo FROM clasificacion WHERE codigo='".($codigo)."' ");
            $ca_dupli = mysqli_query($con, $checkemail_duplicidad);
            $cant_duplicidad = mysqli_num_rows($ca_dupli);
        }   

//No existe Registros Duplicados
if ( $cant_duplicidad == 0 ) { 

    $insertarData = "INSERT INTO clasificacion( 
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

mysqli_query($con, $insertarData);
        
} 

else{
    $updateData =  ("UPDATE clasificacion SET 
        codigo ='$codigo',
		nombreDelEquipo = '$nombre',
        copas = '$copas',
        jugadores = '$jugadores',
        mejorBrawler = '$mejorBrawler',
        idRegion = '$region'
        WHERE codigo='$codigo'");

    $result_update = mysqli_query($con, $updateData);
    } 
  }

 $i++;
}

?>

<a href="index.php">Atras</a>